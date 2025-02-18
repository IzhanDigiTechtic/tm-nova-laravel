<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class FrontendController extends Controller

{
    // ##################### Website Pages ######################

    public function home()
    {
        return view(
            'frontend.pages.home',
            [
                'title' => 'Trademark Registration Services in USA | Trademark Nova',
                'description' => 'Trademark registration services in USA. FIle trademark with USPTO . Get Your Trademark Registration With USPTO in Just $49',
                'keywords' => 'Trademark Registration'
            ]
        );
    }
    public function about()
    {
        return view(
            'frontend.pages.about.index',
            [
                'title' => 'About Us | Trademark Nova',
                'description' => '',
                'keywords' => ''
            ]
        );
    }
    public function ourcorecompetencyandvalues()
    {
        return view(
            'frontend.pages.our-core-competency-and-values.index',
            [
                'title' => 'Our Core Competency & Values | Trademark Nova',
                'description' => '',
                'keywords' => ''
            ]
        );
    }
    public function successrate()
    {
        return view(
            'frontend.pages.success-rate.index',
            [
                'title' => 'Success Stories | Trademark Nova',
                'description' => '',
                'keywords' => ''
            ]
        );
    }
    public function reviews()
    {
        return view(
            'frontend.pages.reviews.index',
            [
                'title' => 'Client Testimonials | Trademark Nova',
                'description' => '',
                'keywords' => ''
            ]
        );
    }
    public function contact()
    {
        return view(
            'frontend.pages.contact.index',
            [
                'title' => 'Contact | Trademark Nova',
                'description' => '',
                'keywords' => ''
            ]
        );
    }
    public function fileaustrademark()
    {
        return view(
            'frontend.pages.file-a-us-trademark.index',
            [
                'title' => 'File a US Trademark with USPTO | Trademark Nova',
                'description' => 'File a US trademark confidently with Trademark Nova"s comprehensive guide. Navigate USPTO procedures smoothly and protect your brand "s identity',
                'keywords' => 'file a US trademark'
            ]
        );
    }
    public function copyrightregistration()
    {
        return view(
            'frontend.pages.copyright-registration.index',
            [
                'title' => 'Copyright Registration Services in USA | Trademark Nova',
                'description' => 'Copyright Registration Services in USA by Trademark Nova. Protect your creative assets with streamlined registration process and get copyright registered in $149',
                'keywords' => 'Copyright Registration'
            ]
        );
    }
    public function fileaninternationaltrademark()
    {
        return view(
            'frontend.pages.file-an-international-trademark.index',
            [
                'title' => 'File Your International Trademark | Trademark Nova',
                'description' => 'File Your International Trademark efficiently  with Trademark Nova"s expert assistance. Ensure compliance across borders and safeguard your brand"s identity.',
                'keywords' => 'File International Trademark'
            ]
        );
    }
    public function comprehensivetrademarksearch()
    {
        return view(
            'frontend.pages.comprehensive-trademark-search.index',
            [
                'title' => 'US Trademark Search for FREE | Trademark Nova',
                'description' => 'Conduct a comprehensive US trademark search with Trademark Nova.Find pending trademark applications as well as active and registered trademarks.',
                'keywords' => 'US Trademark Search'
            ]
        );
    }
    public function bookfreeconsultation()
    {
        return view(
            'frontend.pages.book-free-consultation.index',
            [
                'title' => 'Trademark Consultation Services | Trademark Nova',
                'description' => "Trademark Consultation Services with Trademark Nova: Get strategic insights to protect and enhance your brand's identity with confidence",
                'keywords' => 'Trademark Consultation Services'
            ]
        );
    }
    public function IPOrepresentationonbehalfofyourcompany()
    {
        return view(
            'frontend.pages.IPO-representation-on-behalf-of-your-company.index',
            [
                'title' => 'Trademark Representation Services | Trademark Nova',
                'description' => "Trust Trademark Nova for professional trademark representation services. Safeguard your brand with our expert legal guidance",
                'keywords' => 'Trademark Representation Service'
            ]
        );
    }
    public function trademarkrenewal()
    {
        return view(
            'frontend.pages.trademark-renewal.index',
            [
                'title' => 'Trademark Renewel Services | Trademark Nova',
                'description' => 'Renew a Trademark - Trademark Nova offers professional trademark renewal services to safeguard your intellectual property',
                'keywords' => 'trademark renewal service'
            ]
        );
    }
    public function responsetoopposition()
    {
        return view(
            'frontend.pages.response-to-opposition.index',
            [
                'title' => 'Response to Trademark Opposition | Trademark Nova',
                'description' => 'Response to Trademark Opposition made easy with Trademark Nova. Discover expert strategies and support to protect your brand effectively',
                'keywords' => 'response to trademark opposition'
            ]
        );
    }
    public function statementofuse()
    {
        return view(
            'frontend.pages.statement-of-use.index',
            [
                'title' => 'Trademark Statement of Use | Trademark Nova',
                'description' => 'Trademark Statement of Use service from Trademark Nova - the ultimate solution to all your trademark compliance woes',
                'keywords' => 'trademark statement of use'
            ]
        );
    }
    public function coexistenceagreement()
    {
        return view(
            'frontend.pages.co-existence-agreement.index',
            [
                'title' => 'Trademark Coexistence Agreement | Trademark Nova',
                'description' => 'Negotiate a reliable Trademark Coexistence Agreement with Trademark Nova. Ensure mutual brand protection and cooperation with our expert guidance.',
                'keywords' => 'Trademark Coexistence Agreement'
            ]
        );
    }
    public function abandonedtrademarkrefiling()
    {
        return view(
            'frontend.pages.abandoned-trademark-refiling.index',
            [
                'title' => 'Register an Abandoned Trademark | Trademark Nova',
                'description' => 'Reclaim and register an abandoned trademark with ease at Trademark Nova. Get expert guidance to revive and protect your intellectual property.',
                'keywords' => 'Register an Abandoned Trademark'
            ]
        );
    }
    public function trademarkdisputeinsurance()
    {
        return view(
            'frontend.pages.trademark-dispute-insurance.index',
            [
                'title' => 'Trademark Dispute Insurance | Trademark Nova',
                'description' => 'Safeguard your business from Trademark Dispute Insurance withTrademark Nova. Protect against legal costs and disputes over trademark rights',
                'keywords' => 'Trademark Dispute Insurance'
            ]
        );
    }
    public function trademarkmonitoring()
    {
        return view(
            'frontend.pages.trademark-monitoring.index',
            [
                'title' => 'Trademark Monitoring Service | Trademark Nova',
                'description' => 'Stay ahead with our trademark monitoring service at Trademark Nova. Stop competitors from profiting off your reputation',
                'keywords' => 'trademark monitoring service'
            ]
        );
    }
    public function trademarkownershiptransfer()
    {
        return view(
            'frontend.pages.trademark-ownership-transfer.index',
            [
                'title' => 'Trademark Ownership Transfer | Trademark Nova',
                'description' => 'Streamline trademark ownership transfer with Trademark Nova. Our expert team ensures a secure transition to safeguard your brand',
                'keywords' => 'Trademark Ownership Transfer'
            ]
        );
    }
    public function ceasedesistletter()
    {
        return view(
            'frontend.pages.cease-desist-letter.index',
            [
                'title' => 'Cease and Desist Letter | Trademark Nova',
                'description' => "Secure your brand's integrity with Trademark Nova's cease and desist letters. Trust our legal expertise to address trademark infringements promptly",
                'keywords' => 'Cease and Desist Letter  '
            ]
        );
    }
    public function domainresolution()
    {
        return view(
            'frontend.pages.domain-resolution.index',
            [
                'title' => 'Domain Resolution Services | Trademark Nova',
                'description' => "Resolve domain disputes effectively with Trademark Nova's Domain Resolution services. Our team offers strategic solutions to safeguard your brand's reputation",
                'keywords' => 'Domain resolution services '
            ]
        );
    }
    public function amazonbrandregistryus()
    {
        return view(
            'frontend.pages.amazon-brand-registry-us.index',
            [
                'title' => 'Amazon Brand Registry US | Trademark Nova',
                'description' => '',
                'keywords' => ''
            ]
        );
    }
    public function businessformation()
    {
        return view(
            'frontend.pages.business-formation.index',
            [
                'title' => 'Business Formation Services | Trademark Nova',
                'description' => '',
                'keywords' => 'file a trademark, trademark registration, file my trademark, register a logo, apply for trademark, trademark a slogan, register brand name, register trademark, trademark my business name, register a trademark'
            ]
        );
    }
    public function companydissolution()
    {
        return view(
            'frontend.pages.company-dissolution.index',
            [
                'title' => 'Business Formation Services | Trademark Nova',
                'description' => '',
                'keywords' => 'file a trademark, trademark registration, file my trademark, register a logo, apply for trademark, trademark a slogan, register brand name, register trademark, trademark my business name, register a trademark'
            ]
        );
    }
    public function issuesofshares()
    {
        return view(
            'frontend.pages.issues-of-shares.index',
            [
                'title' => 'Issues Of Shares | Trademark Nova',
                'description' => '',
                'keywords' => ''
            ]
        );
    }
    public function transferofshares()
    {
        return view(
            'frontend.pages.transfer-of-shares.index',
            [
                'title' => 'Transfer of Shares | Trademark Nova',
                'description' => '',
                'keywords' => 'file a trademark, trademark registration, file my trademark, register a logo, apply for trademark, trademark a slogan, register brand name, register trademark, trademark my business name, register a trademark'
            ]
        );
    }
    public function certificateofgoodstandingservice()
    {
        return view(
            'frontend.pages.certificate-of-good-standing-service.index',
            [
                'title' => 'Certificate of Good Standing | Trademark Nova',
                'description' => '',
                'keywords' => 'file a trademark, trademark registration, file my trademark, register a logo, apply for trademark, trademark a slogan, register brand name, register trademark, trademark my business name, register a trademark'
            ]
        );
    }
    public function companynamechange()
    {
        return view(
            'frontend.pages.company-name-change.index',
            [
                'title' => 'Company Name Change Services | Trademark Nova',
                'description' => '',
                'keywords' => 'file a trademark, trademark registration, file my trademark, register a logo, apply for trademark, trademark a slogan, register brand name, register trademark, trademark my business name, register a trademark'
            ]
        );
    }
    public function companyrenewal()
    {
        return view(
            'frontend.pages.company-renewal.index',
            [
                'title' => 'Company Renewal Service | Trademark Nova',
                'description' => '',
                'keywords' => 'file a trademark, trademark registration, file my trademark, register a logo, apply for trademark, trademark a slogan, register brand name, register trademark, trademark my business name, register a trademark'
            ]
        );
    }
    public function nomineedirectorandsecretarialservices()
    {
        return view(
            'frontend.pages.nominee-director-and-secretarial-services.index',
            [
                'title' => 'Nominee Director Services | Trademark Nova',
                'description' => '',
                'keywords' => 'file a trademark, trademark registration, file my trademark, register a logo, apply for trademark, trademark a slogan, register brand name, register trademark, trademark my business name, register a trademark'
            ]
        );
    }
    public function bookkeeping()
    {
        return view(
            'frontend.pages.bookkeeping.index',
            [
                'title' => 'Bookkeeping & Accounting Services | Trademark Nova',
                'description' => '',
                'keywords' => 'file a trademark, trademark registration, file my trademark, register a logo, apply for trademark, trademark a slogan, register brand name, register trademark, trademark my business name, register a trademark'
            ]
        );
    }
    public function taxadvisoryandfiling()
    {
        return view(
            'frontend.pages.tax-advisory-and-filing.index',
            [
                'title' => 'Bookkeeping & Accounting Services | Trademark Nova',
                'description' => '',
                'keywords' => 'file a trademark, trademark registration, file my trademark, register a logo, apply for trademark, trademark a slogan, register brand name, register trademark, trademark my business name, register a trademark'
            ]
        );
    }
    public function cfoservices()
    {
        return view(
            'frontend.pages.cfo-services.index',
            [
                'title' => 'CFO Services | Trademark Nova',
                'description' => '',
                'keywords' => ''
            ]
        );
    }
    public function legalconsultationonpartnershipsandLLPs()
    {
        return view(
            'frontend.pages.legal-consultation-on-partnerships-and-LLPs.index',
            [
                'title' => 'Legal Consultation On Partnerships & LLPs | Trademark Nova',
                'description' => '',
                'keywords' => 'file a trademark, trademark registration, file my trademark, register a logo, apply for trademark, trademark a slogan, register brand name, register trademark, trademark my business name, register a trademark'
            ]
        );
    }
    public function duediligenceprocess()
    {
        return view(
            'frontend.pages.due-diligence-process.index',
            [
                'title' => 'Due Diligence Services | Trademark Nova',
                'description' => '',
                'keywords' => 'file a trademark, trademark registration, file my trademark, register a logo, apply for trademark, trademark a slogan, register brand name, register trademark, trademark my business name, register a trademark'
            ]
        );
    }
    public function businessimmigrationlawyer()
    {
        return view(
            'frontend.pages.business-immigration-lawyer.index',
            [
                'title' => 'Business Immigration Solicitors | Trademark Nova',
                'description' => '',
                'keywords' => 'file a trademark, trademark registration, file my trademark, register a logo, apply for trademark, trademark a slogan, register brand name, register trademark, trademark my business name, register a trademark'
            ]
        );
    }
    public function ITandcommerciallaw()
    {
        return view(
            'frontend.pages.IT-and-commercial-law.index',
            [
                'title' => 'IT & Commercial Law | Trademark Nova',
                'description' => '',
                'keywords' => 'file a trademark, trademark registration, file my trademark, register a logo, apply for trademark, trademark a slogan, register brand name, register trademark, trademark my business name, register a trademark'
            ]
        );
    }
    public function dataprotectionandprivacylaw()
    {
        return view(
            'frontend.pages.data-protection-and-privacy-law.index',
            [
                'title' => 'Data Protection & Privacy Law | Trademark Nova',
                'description' => '',
                'keywords' => ''
            ]
        );
    }
    public function trademarklearningessentials()
    {
        return view(
            'frontend.pages.trademark-learning-essentials.index',
            [
                'title' => 'Trademark Learning Essentials | Trademark Nova',
                'description' => '',
                'keywords' => ''
            ]
        );
    }
    public function countrywiseguide()
    {
        return view(
            'frontend.pages.country-wise-guide.index',
            [
                'title' => 'Country Wise Guide | Trademark Nova',
                'description' => '',
                'keywords' => 'file a trademark, trademark registration, file my trademark, register a logo, apply for trademark, trademark a slogan, register brand name, register trademark, trademark my business name, register a trademark'
            ]
        );
    }
    public function faq()
    {
        return view(
            'frontend.pages.faq.index',
            [
                'title' => 'FAQs | Trademark Nova',
                'description' => '',
                'keywords' => ''
            ]
        );
    }
    public function whatisatrademark()
    {
        return view(
            'frontend.pages.what-is-a-trademark.index',
            [
                'title' => 'What is Trademark | Trademark Nova',
                'description' => '',
                'keywords' => 'file a trademark, trademark registration, file my trademark, register a logo, apply for trademark, trademark a slogan, register brand name, register trademark, trademark my business name, register a trademark'
            ]
        );
    }
    public function trademarkpatentcopyright()
    {
        return view(
            'frontend.pages.trademark-patent-copyright.index',
            [
                'title' => 'Trademark Patent & Copyright | Trademark Nova',
                'description' => '',
                'keywords' => 'file a trademark, trademark registration, file my trademark, register a logo, apply for trademark, trademark a slogan, register brand name, register trademark, trademark my business name, register a trademark'
            ]
        );
    }
    public function trademarkexamples()
    {
        return view(
            'frontend.pages.trademark-examples.index',
            [
                'title' => 'Trademark Examples | Trademark Nova',
                'description' => '',
                'keywords' => 'file a trademark, trademark registration, file my trademark, register a logo, apply for trademark, trademark a slogan, register brand name, register trademark, trademark my business name, register a trademark'
            ]
        );
    }
    public function scopeofprotection()
    {
        return view(
            'frontend.pages.scope-of-protection.index',
            [
                'title' => 'Scope Of Protection | Trademark Nova',
                'description' => '',
                'keywords' => 'file a trademark, trademark registration, file my trademark, register a logo, apply for trademark, trademark a slogan, register brand name, register trademark, trademark my business name, register a trademark'
            ]
        );
    }
    public function strongtrademarks()
    {
        return view(
            'frontend.pages.strong-trademarks.index',
            [
                'title' => 'Strong Trademarks | Trademark Nova',
                'description' => '',
                'keywords' => 'file a trademark, trademark registration, file my trademark, register a logo, apply for trademark, trademark a slogan, register brand name, register trademark, trademark my business name, register a trademark'
            ]
        );
    }
    public function whyregisteryourtrademark()
    {
        return view(
            'frontend.pages.why-register-your-trademark.index',
            [
                'title' => 'Why Register Your Trademark | Trademark Nova',
                'description' => '',
                'keywords' => 'file a trademark, trademark registration, file my trademark, register a logo, apply for trademark, trademark a slogan, register brand name, register trademark, trademark my business name, register a trademark'
            ]
        );
    }
    public function doineedanattorney()
    {
        return view(
            'frontend.pages.do-i-need-an-attorney.index',
            [
                'title' => 'Do I Need An Attorney | Trademark Nova',
                'description' => '',
                'keywords' => 'file a trademark, trademark registration, file my trademark, register a logo, apply for trademark, trademark a slogan, register brand name, register trademark, trademark my business name, register a trademark'
            ]
        );
    }
    public function howlongdoesittake()
    {
        return view(
            'frontend.pages.how-long-does-it-take.index',
            [
                'title' => 'How Long Does It Take To Register | Trademark Nova',
                'description' => '',
                'keywords' => 'file a trademark, trademark registration, file my trademark, register a logo, apply for trademark, trademark a slogan, register brand name, register trademark, trademark my business name, register a trademark'
            ]
        );
    }
    public function commonproblemsinapplications()
    {
        return view(
            'frontend.pages.common-problems-in-applications.index',
            [
                'title' => 'Common Problems in Applications | Trademark Nova',
                'description' => '',
                'keywords' => 'file a trademark, trademark registration, file my trademark, register a logo, apply for trademark, trademark a slogan, register brand name, register trademark, trademark my business name, register a trademark'
            ]
        );
    }
    public function VATregistration()
    {
        return view(
            'frontend.pages.VAT-registration.index',
            [
                'title' => 'VAT Registration Service | Trademark Nova',
                'description' => '',
                'keywords' => ''
            ]
        );
    }
    public function thankyou()
    {
        return view(
            'frontend.pages.thank-you.index',
            [
                'title' => 'Thankyou |  Trademark Nova ',
                'description' => "",
                'keywords' => ''
            ]
        );
    }
    public function thankyou2()
    {
        return view(
            'frontend.pages.thankyou.index',
            [
                'title' => 'Thankyou |  Trademark Nova ',
                'description' => "",
                'keywords' => ''
            ]
        );
    }
    public function privacypolicy()
    {
        return view(
            'frontend.pages.privacy-policy.index',
            [
                'title' => 'Privacy Policy | Trademark Nova ',
                'description' => "",
                'keywords' => 'file a trademark, trademark registration, file my trademark, register a logo, apply for trademark, trademark a slogan, register brand name, register trademark, trademark my business name, register a trademark'
            ]
        );
    }
    public function termsandconditions()
    {
        return view(
            'frontend.pages.terms-and-conditions.index',
            [
                'title' => 'Terms & Conditions | Trademark Nova ',
                'description' => "",
                'keywords' => 'file a trademark, trademark registration, file my trademark, register a logo, apply for trademark, trademark a slogan, register brand name, register trademark, trademark my business name, register a trademark'
            ]
        );
    }
    public function lpregisteryourtrademark()
    {
        return view(
            'frontend.pages.lp.register-your-trademark.index',
            [
                'title' => 'File A Trademark Now | Trademark Nova ',
                'description' => "",
                'keywords' => 'file a trademark, trademark registration, file my trademark, register a logo, apply for trademark, trademark a slogan, register brand name, register trademark, trademark my business name, register a trademark'
            ]
        );
    }
    //############# Sequence Pages ######################
    public function step1()
    {
        return Inertia::render('Sequence/Step1');
        // return view(
        //     'frontend.pages.sequence.step1',
        //     [
        //         'title' => 'Sequence | Trademark Nova',
        //         'description' => ''
        //     ]
        // );
    }
    public function step2()
    {
        return Inertia::render('Sequence/Step2');
        // return view(
        //     'frontend.pages.sequence.step2',
        //     [
        //         'title' => 'Sequence | Trademark Nova',
        //         'description' => ''
        //     ]
        // );
    }
    public function step3()
    {
        return Inertia::render('Sequence/Step3');
        // return view(
        //     'frontend.pages.sequence.step3',
        //     [
        //         'title' => 'Sequence | Trademark Nova',
        //         'description' => ''
        //     ]
        // );
    }
    public function step4()
    {
        return Inertia::render('Sequence/Step4');
        // return view(
        //     'frontend.pages.sequence.step4',
        //     [
        //         'title' => 'Sequence | Trademark Nova',
        //         'description' => ''
        //     ]
        // );
    }
    public function step5()
    {
        return Inertia::render('Sequence/Step5');
        // return view(
        //     'frontend.pages.sequence.step5',
        //     [
        //         'title' => 'Sequence | Trademark Nova',
        //         'description' => ''
        //     ]
        // );
    }
    public function step6()
    {
        return Inertia::render('Sequence/Step6');
        // return view(
        //     'frontend.pages.sequence.step6',
        //     [
        //         'title' => 'Sequence | Trademark Nova',
        //         'description' => ''
        //     ]
        // );
    }

    public function invoicePayment()
    {
        return view(
            'frontend.pages.invoice',
            [
                'title' => 'Invoice',
                'description' => '',
                'keywords' => ''
            ]
        );
    }
}
