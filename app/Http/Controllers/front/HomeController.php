<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Helpers\ConstantHelper;
use App\Models\HomeAboutSection;
use App\Models\HomeFirstSection;
use App\Models\HomeServiceSection;
use App\Models\HomeProfessionalSkillSection;
use App\Models\HomeSectionFive;
use App\Models\Blog;
use App\Models\Gallery;
use App\Models\AboutUs;
use App\Models\AboutFaq;
use App\Models\ChooseUs;
use App\Models\Contact;
// services
use App\Models\SitcDrone;
use App\Models\AntiDrone;
use App\Models\SkillDevelopmentTraining;
use App\Models\CorporateTraining;
use App\Models\GisRemoteSensing;
use App\Models\SkillItRecruitment;
use App\Models\NonItRecruitment;
use App\Models\ApplicationWebDev;
use App\Models\HrConsultingServices;
use App\Models\ItHardwaresAccessories;
use App\Models\LicensedSoftwaresSolution;
use App\Models\ScanningDigitization;
use App\Models\SecuritySurvillance;
use App\Models\SystemIntegration;
use App\Models\SystemIntegrationDataService;
use App\Models\TrainingImplementation;
use App\Models\WebBasedSoftware;
use App\Models\CallCenterSolution;
use App\Models\DroneTechnology;
use App\Models\EGovProject;
use App\Models\ITService;
use App\Models\ManpowerSupport;
use App\Models\ManpowerStaffing;
use App\Models\OnlineRegistration;
use App\Models\ProcurementSupport;
use App\Models\SoftwareDevelopment;
use App\Models\TrainingDevelopment;
use App\Models\TrainingExcellencePartner;

use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Message;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data['banner'] = HomeFirstSection::where('page_id',1)->first();
        $data['about'] = HomeAboutSection::where('page_id',1)->first();
        $data['service'] = HomeServiceSection::where('page_id',1)->first();
        $data['professionalSkill'] = HomeProfessionalSkillSection::where('page_id', 1)->first();
        $data['professionalExperience'] = HomeSectionFive::where('page_id', 1)->first();
        $data['blogs'] = Blog::orderBy('id',  'desc')->where('status',  ConstantHelper::ACTIVE)->take(3)->get();
        $data['Gallery'] = Gallery::select('id','category','images')->where('category', 'achievements')->where('status',ConstantHelper::ACTIVE)->take(8)->get();
        $data['events'] = Gallery::select('id','category','images')->where('category', 'events')->where('status',ConstantHelper::ACTIVE)->take(8)->get();
        $data['count'] =  Gallery::select('id','category','images')->where('status',ConstantHelper::ACTIVE)->get()->count();
    
        return view('front.index', compact('data'));
    }

    public function about(){
        $data['banner'] = HomeFirstSection::where('page_id',1)->first();
        $data['about'] = AboutUs::where('page_id',2)->first();
        $data['mission_vission'] = HomeAboutSection::where('page_id',1)->first();
        $data['homeSectionFive'] = HomeSectionFive::where('page_id',1)->first();
        $data['chooseUs']  = ChooseUs::where('page_id',2)->first();
        $data['professionalExperience'] = HomeSectionFive::where('page_id', 1)->first();
        $data['faqs'] = AboutFaq::orderBy('id', 'desc')->get();
        return view('front.about', compact('data'));
    }

    public function services(){
        $data['banner'] = HomeFirstSection::where('page_id',1)->first();
        $data['about'] = HomeAboutSection::where('page_id',1)->first();
        return view('front.services.services', compact('data'));
    }
    public function contact(){
        $data['banner'] = HomeFirstSection::where('page_id',1)->first();
        $data['about'] = HomeAboutSection::where('page_id',1)->first();
        return view('front.contact', compact('data'));
    }
    
    public function store(Request $request){
        
        try {
     $validated = $request->validate([
        'name' => 'required|max:255',
        'email' => 'required|max:255',
        'mobile' => 'required',
        'subject' => 'required',
        'message' => 'required',
    ]);
        
        $contact = new Contact();
        $contact->fill($request->all());
        $contact->save();  
        
        $to = $request->email;
        $subject = $request->subject;
        $message = $request->message;

        // Mail::raw($message, function (Message $mail) use ($to, $subject) {
        // $mail->to($to)
        //      ->subject($subject);
        // });

        
        return response()->json([
            'status' => 200,
            'message' =>  'Thanks for contact with us, Team will contact you soon'
            ]);
        } catch (ValidationException $e) {
            // Handle validation errors
            return response()->json(['errors' => $e->errors()], 422);
        }
    }
    
     public function career(){
        $data['banner'] = HomeFirstSection::where('page_id',1)->first();
        $data['about'] = HomeAboutSection::where('page_id',1)->first();
        return view('front.career', compact('data'));
    }
     public function blog(){
        $data['banner'] = HomeFirstSection::where('page_id',1)->first();
        $data['about'] = HomeAboutSection::where('page_id',1)->first();
        $data['blogs'] =  Blog::orderBy('id',  'desc')->paginate(9);
        return view('front.blog', compact('data'));
    }
    
       public function sitdrone(){
        $data['banner'] = HomeFirstSection::where('page_id',1)->first();
        $data['about'] = HomeAboutSection::where('page_id',1)->first();
        $data['sitc_drone'] = SitcDrone::where('status',  ConstantHelper::ACTIVE)->first();

        $data['title'] =  $data['sitc_drone']->meta_title;
        $data['keywords'] =  $data['sitc_drone']->meta_keywords;
        $data['description'] =  $data['sitc_drone']->meta_descriptions;

     //   print_r($data);die;
        return view('front.services.sit_drone', compact('data'));
    }
    
      public function antidrone(){
        
        $data['anti_drone'] = AntiDrone::where('status',  ConstantHelper::ACTIVE)->first();
        return view('front.services.anti_drone', compact('data'));
    }
    public function callCentreSolution(){
        $data['call_center'] = CallCenterSolution::where('status',  ConstantHelper::ACTIVE)->first();
        $data['title'] =  $data['call_center']->meta_title;
        $data['keywords'] =  $data['call_center']->meta_keywords;
        $data['description'] =  $data['call_center']->meta_descriptions;
        return view('front.services.call_centre_solutions', compact('data'));
    }
    
    
    public function skillDevelopment(){
        $data['banner'] = HomeFirstSection::where('page_id',1)->first();
        $data['about'] = HomeAboutSection::where('page_id',1)->first();
        
         $data['skill_dev_training'] = SkillDevelopmentTraining::where('status',  ConstantHelper::ACTIVE)->first();
        // meta info
        $data['title'] =  $data['skill_dev_training']->meta_title;
        $data['keywords'] =  $data['skill_dev_training']->meta_keywords;
        $data['description'] =  $data['skill_dev_training']->meta_descriptions;
        
        return view('front.services.skill_development', compact('data'));
    }
    
     public function corporateTraining(){
        $data['banner'] = HomeFirstSection::where('page_id',1)->first();
        $data['about'] = HomeAboutSection::where('page_id',1)->first();
        
        $data['corporateTraining']  = CorporateTraining::where('status',  ConstantHelper::ACTIVE)->first();
        // meta info
        $data['title'] =  $data['corporateTraining']->meta_title;
        $data['keywords'] =  $data['corporateTraining']->meta_keywords;
        $data['description'] =  $data['corporateTraining']->meta_descriptions;
        
        return view('front.services.corporate_training', compact('data'));
    }
    
    public function skillItRecruitment(){
        $data['banner'] = HomeFirstSection::where('page_id',1)->first();
        $data['about'] = HomeAboutSection::where('page_id',1)->first();

        $data['it_recruitment'] = SkillItRecruitment::where('status',  ConstantHelper::ACTIVE)->first();
        // meta info
        $data['title'] =  $data['it_recruitment']->meta_title;
        $data['keywords'] =  $data['it_recruitment']->meta_keywords;
        $data['description'] =  $data['it_recruitment']->meta_descriptions;



        return view('front.services.skill_it_recruitment', compact('data'));
    }
    
      public function nonItRecruitment(){
          
       $data['banner'] = HomeFirstSection::where('page_id',1)->first();
        $data['about'] = HomeAboutSection::where('page_id',1)->first();

        $data['non_it_recruitment'] = NonItRecruitment::where('status',  ConstantHelper::ACTIVE)->first();
        // meta info
        $data['title'] =  $data['non_it_recruitment']->meta_title;
        $data['keywords'] =  $data['non_it_recruitment']->meta_keywords;
        $data['description'] =  $data['non_it_recruitment']->meta_descriptions;
        
        return view('front.services.non_it_recruitment', compact('data'));
    }
    
     public function itHardwaresAccessories(){
        $data['banner'] = HomeFirstSection::where('page_id',1)->first();
        $data['about'] = HomeAboutSection::where('page_id',1)->first();
         $data['it_hardware_asse'] = ItHardwaresAccessories::where('status',  ConstantHelper::ACTIVE)->first();
        // meta info
        $data['title'] =  $data['it_hardware_asse']->meta_title;
        $data['keywords'] =  $data['it_hardware_asse']->meta_keywords;
        $data['description'] =  $data['it_hardware_asse']->meta_descriptions;
        
        return view('front.services.it_hardwares_accessories', compact('data'));
    }
    
    public function licensedSoftwaresSolutions(){
        $data['banner'] = HomeFirstSection::where('page_id',1)->first();
        $data['about'] = HomeAboutSection::where('page_id',1)->first();
        $data['licensedsoftware'] = LicensedSoftwaresSolution::where('status',  ConstantHelper::ACTIVE)->first();
        // meta info
        $data['title'] =  $data['licensedsoftware']->meta_title;
        $data['keywords'] =  $data['licensedsoftware']->meta_keywords;
        $data['description'] =  $data['licensedsoftware']->meta_descriptions;
        return view('front.services.licensed_softwares_solutions', compact('data'));
    }
    
    public function applicationWebDevelopment(){
       $data['banner'] = HomeFirstSection::where('page_id',1)->first();
        $data['about'] = HomeAboutSection::where('page_id',1)->first();

        $data['app_and_web'] = ApplicationWebDev::where('status',  ConstantHelper::ACTIVE)->first();
        // meta info
        $data['title'] =  $data['app_and_web']->meta_title;
        $data['keywords'] =  $data['app_and_web']->meta_keywords;
        $data['description'] =  $data['app_and_web']->meta_descriptions;
        return view('front.services.application_web_development', compact('data'));
    }
    
    public function webBasedSoftwares(){
        $data['banner'] = HomeFirstSection::where('page_id',1)->first();
        $data['about'] = HomeAboutSection::where('page_id',1)->first();
        
        $data['web_based_soft'] = WebBasedSoftware::where('status',  ConstantHelper::ACTIVE)->first();
        // meta info
        $data['title'] =  $data['web_based_soft']->meta_title;
        $data['keywords'] =  $data['web_based_soft']->meta_keywords;
        $data['description'] =  $data['web_based_soft']->meta_descriptions;
        
        
        return view('front.services.web_based_softwares', compact('data'));
    }
    
    public function systemIntegrationDataService(){
        $data['banner'] = HomeFirstSection::where('page_id',1)->first();
        $data['about'] = HomeAboutSection::where('page_id',1)->first();
        
        $data['system_integration_data_service'] = SystemIntegrationDataService::where('status',  ConstantHelper::ACTIVE)->first();
        $data['title'] =  $data['system_integration_data_service']->meta_title;
        $data['keywords'] =  $data['system_integration_data_service']->meta_keywords;
        $data['description'] =  $data['system_integration_data_service']->meta_descriptions;
        
        return view('front.services.system_integration_data_service', compact('data'));
    }
    
     public function trainingImplementation(){
        $data['banner'] = HomeFirstSection::where('page_id',1)->first();
        $data['about'] = HomeAboutSection::where('page_id',1)->first();
        
         $data['trainingImplementation']  = TrainingImplementation::where('status',  ConstantHelper::ACTIVE)->first();
        // meta info
        $data['title'] =  $data['trainingImplementation']->meta_title;
        $data['keywords'] =  $data['trainingImplementation']->meta_keywords;
        $data['description'] =  $data['trainingImplementation']->meta_descriptions;
        
        return view('front.services.training_implementation', compact('data'));
    }
    
    public function securitySurvillanceProjectCctv(){
        $data['banner'] = HomeFirstSection::where('page_id',1)->first();
        $data['about'] = HomeAboutSection::where('page_id',1)->first();
        
         $data['banner'] = HomeFirstSection::where('page_id',1)->first();
        $data['about'] = HomeAboutSection::where('page_id',1)->first();

        $data['security_survillance'] = SecuritySurvillance::where('status',  ConstantHelper::ACTIVE)->first();
        // meta info
        $data['title'] =  $data['security_survillance']->meta_title;
        $data['keywords'] =  $data['security_survillance']->meta_keywords;
        $data['description'] =  $data['security_survillance']->meta_descriptions;
        
        return view('front.services.security_survillance_project_cctv', compact('data'));
    }
    
    public function scanningDigitizationDocManagementSystem(){
        // dd('ok');
        $data['banner'] = HomeFirstSection::where('page_id',1)->first();
        $data['about'] = HomeAboutSection::where('page_id',1)->first();
        
         $data['scanningDigit'] = ScanningDigitization::where('status',  ConstantHelper::ACTIVE)->first();
        // meta info
        $data['title'] =  $data['scanningDigit']->meta_title;
        $data['keywords'] =  $data['scanningDigit']->meta_keywords;
        $data['description'] =  $data['scanningDigit']->meta_descriptions;
        
        return view('front.services.scanning_digitization_document_management_system', compact('data'));
    }
    
    public function gisRemoteSensingProjects(){
        $data['banner'] = HomeFirstSection::where('page_id',1)->first();
        $data['about'] = HomeAboutSection::where('page_id',1)->first();
        
        $data['gisData']  = GisRemoteSensing::where('status',  ConstantHelper::ACTIVE)->first();
        $data['title'] =  $data['gisData']->meta_title;
        $data['keywords'] =  $data['gisData']->meta_keywords;
        $data['description'] =  $data['gisData']->meta_descriptions;
        
        return view('front.services.gis_remote_sensing_projects', compact('data'));
    }
    
    public function hrConsultingServices(){
        
        $data['banner'] = HomeFirstSection::where('page_id',1)->first();
        $data['about'] = HomeAboutSection::where('page_id',1)->first();
         $data['hr_consulting']  = HrConsultingServices::where('status',  ConstantHelper::ACTIVE)->first();
        $data['title'] =  $data['hr_consulting']->meta_title;
        $data['keywords'] =  $data['hr_consulting']->meta_keywords;
        $data['description'] =  $data['hr_consulting']->meta_descriptions;
        
        return view('front.services.hr_consulting_services', compact('data'));
    }

    public function eventsGallery(){
        $data['gallery_events'] = Gallery::where('status','active')->where('category', 'events')->get();
        return view('front.events-gallery', compact('data'));
    }
    
    public function poshAct(){
        return view('front.posh');
    }
    
    
    public function droneTechnology(){
          $data['drone_technology']  = DroneTechnology::where('status',  ConstantHelper::ACTIVE)->first();    
        return view('front.services.drone_technology', compact('data'));

    }
    public function trainingDevelopment(){
        $trainingDevelopment = TrainingDevelopment::where('status',  ConstantHelper::ACTIVE)->first();
         return view('front.services.training_development',compact('trainingDevelopment'));
    }
    
    // manpower support 
    
     public function manpowerSupport(){
          $data['manpower_support']  = ManpowerSupport::where('status',  ConstantHelper::ACTIVE)->first();    
         return view('front.services.man_power_support', compact('data'));
    }
    
    
     public function eGovProject(){
          $data['e_project']  = EGovProject::where('status',  ConstantHelper::ACTIVE)->first();    
        return view('front.services.e_gov_projects', compact('data'));
    }
    
    
    public function procurementSupport(){
        $procurementSupport = ProcurementSupport::where('status',  ConstantHelper::ACTIVE)->first();    
         return view('front.services.procurement_support', compact('procurementSupport'));
    }
    
     public function itServices(){
          $data['it_service']  = ITService::where('status',  ConstantHelper::ACTIVE)->first();    
        return view('front.services.it_services', compact('data'));
    }
    
     public function systemIntegration(){
        $systemIntegration = SystemIntegration::where('status', ConstantHelper::ACTIVE)->first(); 
         return view('front.services.system_integration', compact('systemIntegration'));
    }
    
     public function softwareDevelopment(){
            $softwareDevelopment = SoftwareDevelopment::where('status',  ConstantHelper::ACTIVE)->first();  
         return view('front.services.software-development', compact('softwareDevelopment'));
    }
    
    public function onlineRegistrationSystem(){
        $onlineRegistration = OnlineRegistration::where('status',  ConstantHelper::ACTIVE)->first();    
         return view('front.services.online_registration',compact('onlineRegistration'));
    }
    
    public function trainingExcellencePartner(){
        $trainingExcellence = TrainingExcellencePartner::where('status',  ConstantHelper::ACTIVE)->first(); 
          return view('front.services.training-excellence-partner',compact('trainingExcellence'));
    }
    
     public function manpowerStaffing(){
        $manpowerStaffing = ManpowerStaffing::where('status', ConstantHelper::ACTIVE)->first();
          return view('front.services.manpower_staffing', compact('manpowerStaffing'));
    }
    
    
    public function corporateGovernance(){
        return view('front.investors.corporate_governance');
    }
    
    public function ipoDocuments(){
        return view('front.investors.ipo-documents');
    }
    public function groupCompanies(){
        return view('front.investors.group-companies');
    }
    public function investorGrievance(){
        return view('front.investors.investor-grievance');
    }
    public function investorInformation(){
        return view('front.investors.investor-information');
    }
    public function materialContractsDocuments(){
        return view('front.investors.material-contracts-documents');
    }
    
    public function policies(){
        return view('front.investors.policies');
    }
    
    public function subsidiaries(){
        return view('front.investors.subsidiaries');
    }
    
    
    
    
    
}
