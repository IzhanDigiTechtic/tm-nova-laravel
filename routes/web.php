<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FrontendController::class, 'home'])->name('/');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/our-core-competency-and-values', [FrontendController::class, 'ourcorecompetencyandvalues'])->name('our.core.competency.and.values');
Route::get('/success-rate', [FrontendController::class, 'successrate'])->name('success.rate');
Route::get('/reviews', [FrontendController::class, 'reviews'])->name('reviews');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/file-a-us-trademark', [FrontendController::class, 'fileaustrademark'])->name('file.a.us.trademark');
Route::get('/copyright-registration', [FrontendController::class, 'copyrightregistration'])->name('copyright.registration');
Route::get('/file-an-international-trademark', [FrontendController::class, 'fileaninternationaltrademark'])->name('file.an.international.trademark');
Route::get('/comprehensive-trademark-search', [FrontendController::class, 'comprehensivetrademarksearch'])->name('comprehensive.trademark.search');
Route::get('/book-free-consultation', [FrontendController::class, 'bookfreeconsultation'])->name('book.free.consultation');
Route::get('/IPO-representation-on-behalf-of-your-company', [FrontendController::class, 'IPOrepresentationonbehalfofyourcompany'])->name
('IPO.representation.on.behalf.of.your.company');
Route::get('/trademark-renewal', [FrontendController::class, 'trademarkrenewal'])->name('trademark.renewal');
Route::get('/response-to-opposition', [FrontendController::class, 'responsetoopposition'])->name('response.to.opposition');
Route::get('/statement-of-use', [FrontendController::class, 'statementofuse'])->name('statement.of.use');
Route::get('/co-existence-agreement', [FrontendController::class, 'coexistenceagreement'])->name('co.existence.agreement');
Route::get('/abandoned-trademark-refiling', [FrontendController::class, 'abandonedtrademarkrefiling'])->name('abandoned.trademark.refiling');
Route::get('/trademark-dispute-insurance', [FrontendController::class, 'trademarkdisputeinsurance'])->name('trademark.dispute.insurance');
Route::get('/trademark-monitoring', [FrontendController::class, 'trademarkmonitoring'])->name('trademark.monitoring');
Route::get('/trademark-ownership-transfer', [FrontendController::class, 'trademarkownershiptransfer'])->name('trademark.ownership.transfer');
Route::get('/cease-desist-letter', [FrontendController::class, 'ceasedesistletter'])->name('cease.desist.letter');
Route::get('/domain-resolution', [FrontendController::class, 'domainresolution'])->name('domain.resolution');
Route::get('/amazon-brand-registry-us', [FrontendController::class, 'amazonbrandregistryus'])->name('amazon.brand.registry.us');
Route::get('/business-formation', [FrontendController::class, 'businessformation'])->name('business.formation');
Route::get('/company-dissolution', [FrontendController::class, 'companydissolution'])->name('company.dissolution');
Route::get('/issues-of-shares', [FrontendController::class, 'issuesofshares'])->name('issues.of.shares');
Route::get('/transfer-of-shares', [FrontendController::class, 'transferofshares'])->name('transfer.of.shares');
Route::get('/certificate-of-good-standing-service', [FrontendController::class, 'certificateofgoodstandingservice'])->name('certificate.of.good.standing.service');
Route::get('/company-name-change', [FrontendController::class, 'companynamechange'])->name('company.name.change');
Route::get('/company-renewal', [FrontendController::class, 'companyrenewal'])->name('company.renewal');
Route::get('/nominee-director-and-secretarial-services', [FrontendController::class, 'nomineedirectorandsecretarialservices'])->name('nominee.director.and.secretarial.services');
Route::get('/bookkeeping', [FrontendController::class, 'bookkeeping'])->name('bookkeeping');
Route::get('/tax-advisory-and-filing', [FrontendController::class, 'taxadvisoryandfiling'])->name('tax.advisory.and.filing');
Route::get('/cfo-services', [FrontendController::class, 'cfoservices'])->name('cfo.services');
Route::get('/legal-consultation-on-partnerships-and-LLPs', [FrontendController::class, 'legalconsultationonpartnershipsandLLPs'])->name('legal.consultation.on.partnerships.and.LLPs');
Route::get('/due-diligence-process', [FrontendController::class, 'duediligenceprocess'])->name('due.diligence.process');
Route::get('/business-immigration-lawyer', [FrontendController::class, 'businessimmigrationlawyer'])->name('business.immigration.lawyer');
Route::get('/IT-and-commercial-law', [FrontendController::class, 'ITandcommerciallaw'])->name('IT.and.commercial.law');
Route::get('/data-protection-and-privacy-law', [FrontendController::class, 'dataprotectionandprivacylaw'])->name('data.protection.and.privacy.law');
Route::get('/trademark-learning-essentials', [FrontendController::class, 'trademarklearningessentials'])->name('trademark.learning.essentials');
Route::get('/country-wise-guide', [FrontendController::class, 'countrywiseguide'])->name('country.wise.guide');
Route::get('/faq', [FrontendController::class, 'faq'])->name('faq');


Route::get('/what-is-a-trademark', [FrontendController::class, 'whatisatrademark'])->name('what.is.a.trademark');
Route::get('/trademark-patent-copyright', [FrontendController::class, 'trademarkpatentcopyright'])->name('trademark.patent.copyright');
Route::get('/trademark-examples', [FrontendController::class, 'trademarkexamples'])->name('trademark.examples');
Route::get('/scope-of-protection', [FrontendController::class, 'scopeofprotection'])->name('scope.of.protection');
Route::get('/strong-trademarks', [FrontendController::class, 'strongtrademarks'])->name('strong.trademarks');
Route::get('/why-register-your-trademark', [FrontendController::class, 'whyregisteryourtrademark'])->name('why.register.your.trademark');
Route::get('/do-i-need-an-attorney', [FrontendController::class, 'doineedanattorney'])->name('do.i.need.an.attorney');
Route::get('/how-long-does-it-take', [FrontendController::class, 'howlongdoesittake'])->name('how.long.does.it.take');
Route::get('/common-problems-in-applications', [FrontendController::class, 'commonproblemsinapplications'])->name('common.problems.in.applications');
Route::get('/VAT-registration', [FrontendController::class, 'VATregistration'])->name('VAT.registration');


Route::get('/thank-you', [FrontendController::class, 'thankyou'])->name('thank.you');
Route::get('/thankyou', [FrontendController::class, 'thankyou2'])->name('thank.you2');
Route::get('/privacy-policy', [FrontendController::class, 'privacypolicy'])->name('privacy.policy');
Route::get('/terms-and-conditions', [FrontendController::class, 'termsandconditions'])->name('terms.and.conditions');



//##### LP Route #####
Route::get('/lp/register-your-trademark', [FrontendController::class, 'lpregisteryourtrademark'])->name('lp.register.your.trademark');





















































