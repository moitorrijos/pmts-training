<?php 
$file_url = home_url() . "/wp-content/uploads/updated-material-for-instructors/";
$files_array = array(
'STCW Guide for Seafarers' => '1-stcw_guide_english',
'STCW, International Convention on Standards of Training, Certification and Watchkeeping for Seafarers' => '2-stcw-quick-reference-updated-till-july-2014',
'Summary of Decisions Agenda Items' => 'c105-summary-of-decisions',
'Ensuring a Safe, Secure and Efficient Shipping on Clean Oceans' => 'cimar-stcw1978-item-1-panama-translated',
'Incidence of Human Factor' => 'cimar-stcw1978-item-2-panama-translated',
'Origins of Crew Training and Background to the STCW Convention' => 'cimar-stcw1978-item-3-panama-translated',
'The London Amendments of 1995' => 'cimar-stcw1978-item-4-panama-translate',
'Conference of the Philippines and the Manila Amendments' => 'cimar-stcw1978-item-5-panama-translated',
'Annex to the STCW Convention Chapter I' => 'cimar-stcw1978-item-8-panama-translated',
'Annex to the STCW Convention Chapter II, III, IV' => 'cimar-stcw1978-item-9-panama-translated',
'Mandatory Rules and Regulations for the General Supervisions' => 'cimar-stcw1978-item-10-panama-translated',
'STCW Code Part A, Mandatory Rules Chapter I' => 'cimar-stcw1978-item-11a-panama-translated',
'STCW Code Part A, Mandatory Rules Chapter I continuation' => 'cimar-stcw1978-item-12-panama-translated',
'STCW Code Part A, Chapter II, Captain and Bridge Section' => 'cimar-stcw1978-item-13a-panama-translated',
'STCW Code Part A, Chapter II, Rules governing Captain and Bridge Section' => 'cimar-stcw1978-item-13b-panama-translated',
'STCW Code Part A, Chapter III, Rules governing the Engine Section' => 'cimar-stcw1978-item-14a-panama-translated',
'STCW Code Part A, Chapter III, Rules governing the Engine Section continuation' => 'cimar-stcw1978-item-14b-panama-translated',
'STCW Code Part A, Chapter IV, Rules Governing Radio Operators, Chapter V, Rules on Special Training REquirements for Personnel on Certain Types of Ships' => 'cimar-stcw1978-item-15-panama-translated',
'STCW Code Part A, Chapter VI, Standards for Emergency Functions, Safety, Security, Medical Care and Survival' => 'cimar-stcw1978-item-16-panama-translated',
'STCW Code Part A, Chapter VII, Rules on Alternative Certification, Chapter VIII, Rules Concerning Guards' => 'cimar-stcw1978-item-17-panama-translated',
'STCW Code Part B, With recommendatory guidelines on the provisions of the STCW Convention and its Annex' => 'cimar-stcw1978-item-18-panama-translated',
'STCW Code Part B, With recommendatory guidelines on the provisions of the STCW Convention and its Annex continuation' => 'cimar-stcw1978-item-19-panama-translated',
'STCW Code Part B, With recommendatory guidelines on the provisions of the STCW Convention and its Annex continuation' => 'cimar-stcw1978-item-20-panamara-translated',
'Electronic Chart Display and Information System' => 'ecdis-1',
'Ecdis Charts' => 'ecdis-charts',
'Ecdis Familiarisation Check List' => 'ecdis-familiarisation-check-list',
'Use and Management for the Electronic Chart Display and Information System' => 'ecdis-pw-ecdis-junio-2014-translated',
'Ecdis Regulations' => 'ecdis-regulations',
'Ecdis Sensors' => 'ecdis-sensors',
'ECDIS' => 'ecdis',
'MLC Frequently Asked Questions' => 'mlc-2006-frequently-asked-questions-faq-online-revised-edition-2012',
'MLC 2006, ILO English and Spanish' => 'mlc-2006-ilo-english-spanish',
'Model Course 1.02 Specialized Training for Oil Tankers' => 'model-course-1-02-specialized-training-for-oil-tankers',
'Model Course 1.04 Specialized Training for Chemical Tankers' => 'model-course-1-04-specialized-training-for-chemical-tankers',
'Model Course 1.64 Automatic Identification Systems' => 'model-course-1-34-automatic-identification-systems',
'Model Course 1.38 Marine Environmental Awareness' => 'model-course-1-38-marine-evironmental-awareness',
'Model Course 1.39 Leadership and Team Work' => 'model-course-1-39-leadership-and-team-work',
'Model Corse 3.20 Company Security Officer' => 'company-security-officer',
'Model Course 3.21 Port Facility Security Officer' => 'model-course-3-21-port-facility-security-officer',
'Model Course 3.24 Security Awareness for Port Facility Personnel With Designated Security Duties' => 'model-course-3-24-security-awareness-for-port-facility-personnel-with-desigated-security-duties',
'Model Course 3.25 Security Awareness Training for All Port Facility Personnel' => 'model-course-3-25-security-awareness-training-for-all-port-facility-personnel',
'Model Course 3.26 Security Training for Seafarers with Designated Security Duties' => 'model-course-3-26-security-atrining-for-seafarers-with-desigated-security-duties',
'Model Course 3.27 Security Awareness Training for all Seafarers' => 'model-course-3-27-security-awareness-training-for-all-seafarers',
'Model Course 6.10 Train the Simulator Trainer and Assessor' => 'model-course-6-10-train-the-simulator-trainer-and-assessor'
);

?>
<ol class="manila-ammendment">
	<?php foreach ($files_array as $file_title => $file_name) : ?>
		<li><a href="<?php echo $file_url . $file_name . '.pdf'; ?>" target="_blank"><?php echo $file_title; ?></a></li>
	<?php endforeach; ?>
</ol>