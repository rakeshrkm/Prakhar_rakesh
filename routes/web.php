<?php

// admin

use App\Http\Controllers\auth\AuthController;


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\HomeController;
use App\Http\Controllers\admin\home\HomeController as AdminHome;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\GalleryController;
use App\Http\Controllers\admin\about\AboutController;
use App\Http\Controllers\admin\about\ChooseUsController;
use App\Http\Controllers\admin\about\FaqController;
use App\Http\Controllers\admin\service\SitcDroneController;
use App\Http\Controllers\admin\service\AntiDroneController;
use App\Http\Controllers\admin\service\SkillDevelopmentTrainingController;
use App\Http\Controllers\admin\service\CorporateTrainingController;
use App\Http\Controllers\admin\service\SkillItRecruitmentController;
use App\Http\Controllers\admin\service\NonItRecruitmentController;
use App\Http\Controllers\admin\service\ItHardwaresAccessoriesController;
use App\Http\Controllers\admin\service\LicensedSoftwaresSolutionsController;
use App\Http\Controllers\admin\service\ApplicationWebDevController;
use App\Http\Controllers\admin\service\WebBasedSoftwaresController;
use App\Http\Controllers\admin\service\SystemIntegrationDataServiceController;
use App\Http\Controllers\admin\service\TrainingImplementationController;
use App\Http\Controllers\admin\service\SecuritySurvillanceController;
use App\Http\Controllers\admin\service\ScanningDigitizationController;
use App\Http\Controllers\admin\service\GisRemoteSensingController;
use App\Http\Controllers\admin\service\HrConsultingServicesController;
use App\Http\Controllers\admin\service\CallCentreSolutionController;
use App\Http\Controllers\admin\service\ITServiceController;
use App\Http\Controllers\admin\service\EgovProjectController;
use App\Http\Controllers\admin\service\DroneTechnologyController;
use App\Http\Controllers\admin\service\ManpowerSupportController;
use App\Http\Controllers\admin\service\ManpowerStaffingController;
use App\Http\Controllers\admin\service\OnlineRegistrationController;
use App\Http\Controllers\admin\service\ProcurementSupportController;
use App\Http\Controllers\admin\service\SoftwareDevelopmentController;
use App\Http\Controllers\admin\service\SystemIntegrationController;
use App\Http\Controllers\admin\service\TrainingDevelopmentController;
use App\Http\Controllers\admin\service\TrainingExcellencePartnerController;

/*
|--------------------------------------------------------------------------
| Web Routes 
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', [HomeController::class,'index']);
Route::get('/about', [HomeController::class,'about']);
Route::get('/services', [HomeController::class,'services'])->name('services');
Route::get('/contact', [HomeController::class,'contact']);
Route::get('/career', [HomeController::class,'career']);
Route::get('/blog', [HomeController::class,'blog'])->name('blog');
Route::get('/events-gallery', [HomeController::class,'eventsGallery'])->name('events.gallery');
Route::get('/contact', [HomeController::class,'contact']);
Route::post('/contact',[HomeController::class,'store'])->name('submitContact');

// Investor Relations

Route::get('/corporate-governance', [HomeController::class,'corporateGovernance'])->name('corporate-governance');
Route::get('/ipo-documents', [HomeController::class,'ipoDocuments'])->name('ipo-documents');
Route::get('/group-companies', [HomeController::class,'groupCompanies'])->name('group-companies');
Route::get('/investor-grievance', [HomeController::class,'investorGrievance'])->name('investor-grievance');
Route::get('/investor-information', [HomeController::class,'investorInformation'])->name('investor-information');
Route::get('/material-contracts-documents', [HomeController::class,'materialContractsDocuments'])->name('material-contracts-documents');
Route::get('/policies', [HomeController::class,'policies'])->name('policies');
Route::get('/subsidiaries', [HomeController::class,'subsidiaries'])->name('subsidiaries');

// end investor relations

Route::get('/sit-drone', [HomeController::class,'sitdrone']);
Route::get('/anti-drone', [HomeController::class,'antidrone']);
Route::get('/call-centre-solution', [HomeController::class,'callCentreSolution']);
Route::get('/skill-development-training', [HomeController::class,'skillDevelopment']);
Route::get('/corporate-trainings', [HomeController::class,'corporateTraining']);
Route::get('/skill-it-recruitment', [HomeController::class,'skillItRecruitment']);
Route::get('/non-it-recruitment', [HomeController::class,'nonItRecruitment']);
Route::get('/it-hardwares-accessories', [HomeController::class,'itHardwaresAccessories']);
Route::get('/licensed-softwares-solutions', [HomeController::class,'licensedSoftwaresSolutions']);
Route::get('/application-web-development', [HomeController::class,'applicationWebDevelopment']);
Route::get('/website-development', [HomeController::class,'webBasedSoftwares']);
Route::get('/software-development', [HomeController::class,'softwareDevelopment']);
Route::get('/system-integration-data-service', [HomeController::class,'systemIntegrationDataService']);
Route::get('/training-implementation', [HomeController::class,'trainingImplementation']);
Route::get('/security-survillance-project-cctv', [HomeController::class,'securitySurvillanceProjectCctv']);
Route::get('/scanning-digitization-document-management-system', [HomeController::class,'scanningDigitizationDocManagementSystem']);
Route::get('/gis-remote-sensing-projects', [HomeController::class,'gisRemoteSensingProjects']);
Route::get('/hr-consulting-services', [HomeController::class,'hrConsultingServices']);
Route::get('/drone-technology', [HomeController::class,'droneTechnology']);
Route::get('/training-development', [HomeController::class,'trainingDevelopment']);
Route::get('/manpower-support', [HomeController::class,'manpowerSupport']);
Route::get('/e-government-projects', [HomeController::class,'eGovProject']);
Route::get('/procurement-support', [HomeController::class,'procurementSupport']);
Route::get('/it-services', [HomeController::class,'itServices']);
Route::get('/system-integration', [HomeController::class,'systemIntegration']);
Route::get('/online-registration', [HomeController::class,'onlineRegistrationSystem']);
Route::get('/training-excellence-partner', [HomeController::class,'trainingExcellencePartner']);
Route::get('/manpower-staffing', [HomeController::class,'manpowerStaffing']);



Route::get('/posh-act', [HomeController::class,'poshAct']);

Route::prefix('admin')->group(function () {

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login-submit', [AuthController::class, 'authenticate'])->name('loginSubmit');



Route::group(['middleware' => 'admin'], function(){

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    


    
    
Route::get('/add-section1', [AdminHome::class,'edit'])->name('edit-section1');
Route::post('/add-section1', [AdminHome::class,'update'])->name('update-section1');

Route::get('/add-section2', [AdminHome::class,'editAbout'])->name('editAbout');;
Route::post('/add-section2', [AdminHome::class,'updateAbout'])->name('updateAbout');

Route::get('/add-section3', [AdminHome::class,'editService'])->name('editService');
Route::post('/add-section3', [AdminHome::class,'updateService'])->name('updateService');

Route::get('/edit-professional', [AdminHome::class,'editProfessional'])->name('editProfessional');
Route::post('/edit-professional', [AdminHome::class,'updateProfessional'])->name('updateProfessional');

Route::get('/edit-section5', [AdminHome::class,'sectionFive'])->name('sectionFive');
Route::post('/edit-section5', [AdminHome::class,'updateSectionFive'])->name('updateSectionFive');

//blogs

Route::controller(BlogController::class)->prefix('blogs')->group(function () {
    Route::get('/', 'index')->name('admin.blogs.index');
    Route::get('/create', 'create')->name('admin.blogs.create');
    Route::post('/store', 'store')->name('admin.blogs.store');
    Route::get('/edit/{id}', 'edit')->name('admin.blogs.edit');
    Route::put('/update/{id}', 'update')->name('admin.blogs.update');
});

// Gallery

Route::controller(GalleryController::class)->prefix('gallery')->group(function () {
    Route::get('/', 'index')->name('admin.gallery.index');
    Route::get('/create', 'create')->name('admin.gallery.create');
    Route::post('/store', 'store')->name('admin.gallery.store');
//     Route::get('/edit/{id}', 'edit')->name('admin.gallery.edit');
//     Route::put('/update/{id}', 'update')->name('admin.gallery.update');
});

// about us


Route::controller(AboutController::class)->prefix('aboutus')->group(function () {
    Route::get('/', 'index')->name('admin.aboutus.index');
    Route::get('/create', 'create')->name('admin.aboutus.create');
    Route::post('/store', 'store')->name('admin.aboutus.store');
    Route::get('/edit/{id}', 'edit')->name('admin.aboutus.edit');
    Route::put('/update/{id}', 'update')->name('admin.aboutus.update');
});

// about us - why choose us

Route::controller(ChooseUsController::class)->prefix('chooseus')->group(function () {
    Route::get('/', 'index')->name('admin.chooseus.index');
    Route::get('/create', 'create')->name('admin.chooseus.create');
    Route::post('/store', 'store')->name('admin.chooseus.store');
    Route::get('/edit/{id}', 'edit')->name('admin.chooseus.edit');
    Route::put('/update/{id}', 'update')->name('admin.chooseus.update');
});

// about us - faq

Route::controller(FaqController::class)->prefix('about-faqs')->group(function () {
    Route::get('/', 'index')->name('admin.about-faqs.index');
    Route::get('/create', 'create')->name('admin.about-faqs.create');
    Route::post('/store', 'store')->name('admin.about-faqs.store');
    Route::get('/edit/{id}', 'edit')->name('admin.about-faqs.edit');
    Route::put('/update/{id}', 'update')->name('admin.about-faqs.update');
});


// services 

Route::controller(SitcDroneController::class)->prefix('sitc-drone')->group(function () {
    Route::get('/', 'create')->name('admin.sitc-drone.create');
    Route::post('/update', 'update')->name('admin.sitc-drone.update');
}); 

Route::controller(AntiDroneController::class)->prefix('anti-drone')->group(function () {
    Route::get('/create', 'create')->name('admin.anti-drone.create');
    Route::post('/update', 'update')->name('admin.anti-drone.update');
});
Route::controller(AntiDroneController::class)->prefix('anti-drone')->group(function () {
    Route::get('/', 'create')->name('admin.anti-drone.create');
    Route::post('/update', 'update')->name('admin.anti-drone.update');
});

Route::controller(SkillDevelopmentTrainingController::class)->prefix('skill-development-training')->group(function () {
    Route::get('/', 'create')->name('admin.skill-development-training.create');
    Route::post('/update', 'update')->name('admin.skill-development-training.update');
});

Route::controller(CorporateTrainingController::class)->prefix('corporate-trainings')->group(function () {
    Route::get('/', 'create')->name('admin.corporate-trainings.create');
    Route::post('/update', 'update')->name('admin.corporate-trainings.update');
});

Route::controller(SkillItRecruitmentController::class)->prefix('skill-it-recruitment')->group(function () {
    Route::get('/', 'create')->name('admin.skill-it-recruitment.create');
    Route::post('/update', 'update')->name('admin.skill-it-recruitment.update');
});

Route::controller(NonItRecruitmentController::class)->prefix('non-it-recruitment')->group(function () {
    Route::get('/', 'create')->name('admin.non-it-recruitment.create');
    Route::post('/update', 'update')->name('admin.non-it-recruitment.update');
});

Route::controller(ItHardwaresAccessoriesController::class)->prefix('it-hardwares-accessories')->group(function () {
    Route::get('/', 'create')->name('admin.it-hardwares-accessories.create');
    Route::post('/update', 'update')->name('admin.it-hardwares-accessories.update');
});

Route::controller(LicensedSoftwaresSolutionsController::class)->prefix('licensed-softwares-solutions')->group(function () {
    Route::get('/', 'create')->name('admin.licensed-softwares-solutions.create');
    Route::post('/update', 'update')->name('admin.licensed-softwares-solutions.update');
});

Route::controller(ApplicationWebDevController::class)->prefix('application-web-development')->group(function () {
    Route::get('/', 'create')->name('admin.application-web-development.create');
    Route::post('/update', 'update')->name('admin.application-web-development.update');
});

Route::controller(WebBasedSoftwaresController::class)->prefix('web-based-softwares')->group(function () {
    Route::get('/', 'create')->name('admin.web-based-softwares.create');
    Route::post('/update', 'update')->name('admin.web-based-softwares.update');
});

Route::controller(SystemIntegrationDataServiceController::class)->prefix('system-integration-data-service')->group(function () {
    Route::get('/', 'create')->name('admin.system-integration-data-service.create');
    Route::post('/update', 'update')->name('admin.system-integration-data-service.update');
});

Route::controller(TrainingImplementationController::class)->prefix('training-implementation')->group(function () {
    Route::get('/', 'create')->name('admin.training-implementation.create');
    Route::post('/update', 'update')->name('admin.training-implementation.update');
});

Route::controller(SecuritySurvillanceController::class)->prefix('security-survillance')->group(function () {
    Route::get('/', 'create')->name('admin.security-survillance.create');
    Route::post('/update', 'update')->name('admin.security-survillance.update');
});

Route::controller(ScanningDigitizationController::class)->prefix('scanning-digitization')->group(function () {
    Route::get('/', 'create')->name('admin.scanning-digitization.create');
    Route::post('/update', 'update')->name('admin.scanning-digitization.update');
});
Route::controller(GisRemoteSensingController::class)->prefix('gis-remote-sensing')->group(function () {
    Route::get('/', 'create')->name('admin.gis-remote-sensing.create');
    Route::post('/update', 'update')->name('admin.gis-remote-sensing.update');
});

Route::controller(HrConsultingServicesController::class)->prefix('hr-consulting-services')->group(function () {
    Route::get('/', 'create')->name('admin.hr-consulting-services.create');
    Route::post('/update', 'update')->name('admin.hr-consulting-services.update');
});

Route::controller(CallCentreSolutionController::class)->prefix('call-centre-solutions')->group(function () {
    Route::get('/', 'create')->name('admin.call-centre-solutions.create');
    Route::post('/update', 'update')->name('admin.call-centre-solutions.update');
});

// Drone Technology

Route::controller(DroneTechnologyController::class)->prefix('drone-technology')->group(function () {
    Route::get('/', 'create')->name('admin.drone-technology.create');
    Route::post('/update', 'update')->name('admin.drone-technology.update');
});

// E gov Project

Route::controller(EgovProjectController::class)->prefix('e-gov-project')->group(function () {
    Route::get('/', 'create')->name('admin.e-gov-profect.create');
    Route::post('/update', 'update')->name('admin.e-gov-profect.update');
});

// IT SERVICES

Route::controller(ITServiceController::class)->prefix('IT-service')->group(function () {
    Route::get('/', 'create')->name('admin.IT-service.create');
    Route::post('/update', 'update')->name('admin.IT-service.update');
});

// manpower support

Route::controller(ManpowerSupportController::class)->prefix('manpower-support')->group(function () {
    Route::get('/', 'create')->name('admin.manpower-support.create');
    Route::post('/update', 'update')->name('admin.manpower-support.update');
});

// manpower staffing 

Route::controller(ManpowerStaffingController::class)->prefix('manpower-staffing')->group(function () {
    Route::get('/', 'create')->name('admin.manpower-staffing.create');
    Route::post('/update', 'update')->name('admin.manpower-staffing.update');
});

// online registration

Route::controller(OnlineRegistrationController::class)->prefix('online-registration')->group(function () {
    Route::get('/', 'create')->name('admin.online-registration.create');
    Route::post('/update', 'update')->name('admin.online-registration.update');
});

//procurement supports


Route::controller(ProcurementSupportController::class)->prefix('procurement-support')->group(function () {
    Route::get('/', 'create')->name('admin.procurement-support.create');
    Route::post('/update', 'update')->name('admin.procurement-support.update');
});

// software Development

Route::controller(SoftwareDevelopmentController::class)->prefix('software-development')->group(function () {
    Route::get('/', 'create')->name('admin.software-development.create');
    Route::post('/update', 'update')->name('admin.software-development.update');
});

// system integration

Route::controller(SystemIntegrationController::class)->prefix('system-integration')->group(function () {
    Route::get('/', 'create')->name('admin.system-integration.create');
    Route::post('/update', 'update')->name('admin.system-integration.update');
});

//training development

Route::controller(TrainingDevelopmentController::class)->prefix('training-development')->group(function(){
    Route::get('/', 'create')->name('admin.training-development.create');
    Route::post('/update', 'update')->name('admin.training-development.update');
});


// training Excellence Partner

Route::controller(TrainingExcellencePartnerController::class)->prefix('training-excellence')->group(function(){
    Route::get('/', 'create')->name('admin.training-excellence.create');
    Route::post('/update', 'update')->name('admin.training-excellence.update');
});




//logout
  
  Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});

});

Route::get('/contact-list', function () {
    return view('admin.contact-list');
})->name('admin.contact-list');

Route::get('/add-user', function () {
    return view('admin.add-user');
})->name('admin.add-user');
Route::get('/list-user', function () {
    return view('admin.list-user');
})->name('admin.list-user');
Route::get('/logout', function () {
    return view('admin.logout');
})->name('logout');
