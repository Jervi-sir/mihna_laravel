<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Category;
use App\Models\Instructor;
use App\Models\Report;
use App\Models\Training;
use App\Models\Wilaya;
use Illuminate\Support\Facades\Storage;
use Image;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class InstructorController extends Controller
{
    public function register() {
        return view('auth.instructor.register');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:'.User::class,
            'password' => ['required', Rules\Password::defaults()],
        ]);

        $role_id = Role::where('name', 'coach')->first()->id;
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => $role_id,
            'phone_number' => $request->phone_number
        ]);

        $instructor = new Instructor();
        $instructor->school_name = $request->name;
        $instructor->user_id = $user->id;
        $instructor->phone_number = $request->phone_number;
        $instructor->save();

        event(new Registered($user));

        Auth::login($user);

        return redirect('/instructor/dashboard');
    }
    public function login() {
        return view('auth.instructor.login');
    }
    public function authenticate(LoginRequest $request) {
        $request->authenticate();
        $request->session()->regenerate();
        return redirect()->intended('/instructor/dashboard');
    }
    public function addCourse() {
        $categories = Category::orderBy('name')->get();
        foreach ($categories as $index => $category) {
            $data['categories'][$index] = [
                'id' => $category->id,
                'name' => $category->name,
            ];
        }
        $wilayas = Wilaya::orderBy('name')->get();
        foreach ($wilayas as $index => $wilaya) {
            $data['wilayas'][$index] = [
                'id' => $wilaya->id,
                'name' => $wilaya->name,
            ];
        }

        $tags = ["A# .NET", "A# (Axiom)", "A-0 System", "A+", "A++", "ABAP", "ABC", "ABC ALGOL", "ABSET", "ABSYS", "ACC", "Accent", "Ace DASL", "ACL2", "Avicsoft", "ACT-III", "Action!", "ActionScript", "Ada", "Adenine", "Agda", "Agilent VEE", "Agora", "AIMMS", "Alef", "ALF", "ALGOL 58", "ALGOL 60", "ALGOL 68", "ALGOL W", "Alice", "Alma-0", "AmbientTalk", "Amiga E", "AMOS", "AMPL", "Apex (Salesforce.com)", "APL", "AppleScript", "Arc", "ARexx", "Argus", "AspectJ", "Assembly language", "ATS", "Ateji PX", "AutoHotkey", "Autocoder", "AutoIt", "AutoLISP / Visual LISP", "Averest", "AWK", "Axum", "Active Server Pages", "ASP.NET", "B", "Babbage", "Bash", "BASIC", "bc", "BCPL", "BeanShell", "Batch (Windows/Dos)", "Bertrand", "BETA", "Bigwig", "Bistro", "BitC", "BLISS", "Blockly", "BlooP", "Blue", "Boo", "Boomerang", "Bourne shell (including bash and ksh)", "BREW", "BPEL", "B", "C--", "C++ – ISO/IEC 14882", "C# – ISO/IEC 23270", "C/AL", "Caché ObjectScript", "C Shell", "Caml", "Cayenne", "CDuce", "Cecil", "Cesil", "Céu", "Ceylon", "CFEngine", "CFML", "Cg", "Ch", "Chapel", "Charity", "Charm", "Chef", "CHILL", "CHIP-8", "chomski", "ChucK", "CICS", "Cilk", "Citrine (programming language)", "CL (IBM)", "Claire", "Clarion", "Clean", "Clipper", "CLIPS", "CLIST", "Clojure", "CLU", "CMS-2", "COBOL – ISO/IEC 1989", "CobolScript – COBOL Scripting language", "Cobra", "CODE", "CoffeeScript", "ColdFusion", "COMAL", "Combined Programming Language (CPL)", "COMIT", "Common Intermediate Language (CIL)", "Common Lisp (also known as CL)", "COMPASS", "Component Pascal", "Constraint Handling Rules (CHR)", "COMTRAN", "Converge", "Cool", "Coq", "Coral 66", "Corn", "CorVision", "COWSEL", "CPL", "CPL", "Cryptol", "csh", "Csound", "CSP", "CUDA", "Curl", "Curry", "Cybil", "Cyclone", "Cython", "Java", "Javascript", "M2001", "M4", "M#", "Machine code", "MAD (Michigan Algorithm Decoder)", "MAD/I", "Magik", "Magma", "make", "Maple", "MAPPER now part of BIS", "MARK-IV now VISION:BUILDER", "Mary", "MASM Microsoft Assembly x86", "MATH-MATIC", "Mathematica", "MATLAB", "Maxima (see also Macsyma)", "Max (Max Msp – Graphical Programming Environment)", "Maya (MEL)", "MDL", "Mercury", "Mesa", "Metafont", "Microcode", "MicroScript", "MIIS", "Milk (programming language)", "MIMIC", "Mirah", "Miranda", "MIVA Script", "ML", "Model 204", "Modelica", "Modula", "Modula-2", "Modula-3", "Mohol", "MOO", "Mortran", "Mouse", "MPD", "Mathcad", "MSIL – deprecated name for CIL", "MSL", "MUMPS", "Mystic Programming L"];

        return view('instructor.create',[
            'tags' => $tags,
            'categories' => $data['categories'],
            'wilayas' => $data['wilayas']
        ]); 
    }

    public function storeFormation(Request $request) {
        $user = Auth::user();
        $formation = new Training();

        $isChecked = $request->has('certificate') ? 1 : 0;

        $formation->category_id = $request->category_id;
        $formation->coach_id = $user->id;
        $formation->wilaya_id = $request->wilaya_id;
        $formation->address = $request->address;
        $formation->category_id = $request->category_id;
        $formation->title = $request->title;
        $formation->short_description = $request->short_description;
        $formation->long_description = $request->long_description;
        $formation->min_seats = $request->min_seats;
        $formation->start_date = $request->start_date;
        $formation->end_date = $request->end_date;
        $formation->price = $request->price;
        $formation->certificate = $isChecked;
        $formation->images = '';
        $formation->save();

        $formation = Training::find($formation->id);
        $uploadedFileUrl = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        $formation->images = $uploadedFileUrl;
        $formation->save();

        return redirect()->route('instructor.myFormations');
    }

    public function chat() {
        return view('instructor.chat');
    }

    public function editProfile() {
        $wilayas = Wilaya::orderBy('name')->get();
        foreach ($wilayas as $index => $wilaya) {
            $data['wilayas'][$index] = [
                'id' => $wilaya->id,
                'name' => $wilaya->name,
            ];
        }

        $user = Auth::user();
        $data['user'] = [
            'email' => $user->email,
            'phone_number' => $user->phone_number,
            'profile_pic' => $user->profile_pic,
            
        ];
        return view('instructor.editProfile',[
            'wilayas' => $data['wilayas'],
            //'user' => $data['user'],
        ]);
    }

    public function updateProfile(Request $request) {
        $user = Auth::user();
        $user->phone_number = $request->phone_number;
        $user->wilaya_id = $request->wilaya_id;
        $user->school_name = $request->school_name;
        $user->description = $request->description;
        $user->save();

        return back();
    }

    public function updateSocial(Request $request) {
        $user = Auth::user(); // or however you're getting your user
        $profile = $user->profile;
        $profile->social_list = [
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'youtube' => $request->youtube,
            'linkedin' => $request->linkedin,
            'twitter' => $request->twitter,
        ];
        $profile->save();
        return back();
    }

    public function myFormations(Request $request) {
        $user = Auth::user();
        //$active_formations = $user->formations()->orderBy('id', 'desc')->paginate(8);
        $active_formations = Training::orderBy('id', 'desc')->paginate(8);
        $active_formations->transform(function ($formation) {
            return getFormation($formation);
        });

        return view('instructor.myFormations.active',[
            'formations' => $active_formations,
        ]);
    }
    public function myFormationsActive(Request $request) {
        $user = Auth::user();
        //$active_formations = $user->formations()->orderBy('id', 'desc')->paginate(8);
        $active_formations = Training::orderBy('id', 'desc')->paginate(8);
        $active_formations->transform(function ($formation) {
            return getFormation($formation);
        });
        return view('instructor.myFormations.active',[
            'formations' => $active_formations,
        ]);
    }
    public function myFormationsFinished(Request $request) {
        $user = Auth::user();
        //$active_formations = $user->formations()->orderBy('id', 'desc')->paginate(8);
        $finished_formations = Training::orderBy('id', 'desc')->paginate(8);
        $finished_formations->transform(function ($formation) {
            return getFormation($formation);
        });

        return view('instructor.myFormations.finished',[
            'formations' => $finished_formations,
        ]);
    }
    public function myFormationsAll(Request $request) {
        $user = Auth::user();
        //$active_formations = $user->formations()->orderBy('id', 'desc')->paginate(8);
        $all_formations = Training::orderBy('id', 'desc')->paginate(8);
        $all_formations->transform(function ($formation) {
            return getFormation($formation);
        });

        return view('instructor.myFormations.all',[
            'formations' => $all_formations,
        ]);
    }

    public function reportIssue(Request $request) {
        $issue = new Report();
        $issue->user_id = Auth::user()->id;
        $issue->email = $request->email;
        $issue->message = $request->description;
        $issue->save();

        return back();
    }

    public function myEarnings() {
        return view('instructor.myEarnings');
    }

    public function linkedAccounts() {
        return view('instructor.linkedAccounts');
    }

    public function updateLinkedAccounts() {
        //return view('instructor.');
    }

    public function notifications() {
        return view('instructor.notifications');
    }

    public function notificationSetup() {
        return view('instructor.notificationSetup');
    }

    public function payouts() {
        return view('instructor.payouts');
    }
    
    public function security() {
        return view('instructor.security');
    }
    
    public function studentList() {
        return view('instructor.studentList');
    }
    
    public function studentPurchase() {
        return view('instructor.studentPurchase');
    }

    public function dashboard() {
        $oraganizer = Auth::user();
        $courses = $oraganizer->courses;
        
        return view('instructor.dashboard',[
            'organizer' => $oraganizer,
            'courses' => $courses,
        ]);
    }

    public function privacy() {
        return view('layouts.orivacy');
    }

    public function support() {
        return view('layouts.support');
    }
    
    public function terms() {
        return view('layouts.terms');
    }
}
