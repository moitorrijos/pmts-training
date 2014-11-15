<?php 
$file_url = "/wp-content/uploads/updated-courses-for-intructors/";
$files_array = array(
	"Report Of The Conference Of The Parties To The International Convention On STCW For Seafarers, 1978, 2010" => "c_105-10.pdf",
	"STCW Convention 1978" 		=> "conveniostcw1978.pdf",
	"Model Course 134e" 		=> "et134e.pdf",
	"Model Course 138e" 		=> "et138e.pdf",
	"Model Course 139e" 		=> "et139e.pdf",
	"Model Course 324e" 		=> "et324e.pdf",
	"Model Course 325e" 		=> "et325e.pdf",
	"Model Course 326e" 		=> "et326e.pdf",
	"Model Course 327e" 		=> "et327e.pdf",
	"Model Course 610e" 		=> "et610e.pdf",
	"Model Course a320e" 		=> "eta320e.pdf",
	"Model Course a321e" 		=> "eta321e.pdf",
	"Model Course b102e" 		=> "etb102e.pdf",
	"Model Course b104e" 		=> "etb104e.pdf",
	"STCW Quick Reference Updated Till July 2014" => "stcw---quick-reference-updated-till-july-2014.pdf",
	"STCW Conf 2 32" 			=> "stcw-conf-2-32.pdf",
	"STCW Conf 2 33" 			=> "stcw-conf-2-33.pdf",
	"STCW Conf 2 34" 			=> "stcw-conf-2-34.pdf",
	"STCW 1978 tema 1 Panama" 	=> "stcw1978tema1-panama.pdf",
	"STCW 1978 tema 2 Panama" 	=> "stcw1978tema2panama.pdf",
	"STCW 1978 tema 3 Panama" 	=> "stcw1978tema3panama.pdf",
	"STCW 1978 tema 4 Panama" 	=> "stcw1978tema4panama.pdf",
	"STCW 1978 tema 5 Panama" 	=> "stcw1978tema5panama.pdf",
	"STCW 1978 tema 8 Panama" 	=> "stcw1978tema8panama.pdf",
	"STCW 1978 tema 9 Panama" 	=> "stcw1978tema9panama.pdf",
	"STCW 1978 tema 10 Panama" 	=> "stcw1978tema10panama.pdf",
	"STCW 1978 tema 11a Panama" => "stcw1978tema11apanama.pdf",
	"STCW 1978 tema 12 Panama" 	=> "stcw1978tema12panama.pdf",
	"STCW 1978 tema 13a Panama" => "stcw1978tema13a-panama.pdf",
	"STCW 1978 tema 13b Panama" => "stcw1978tema13b-panama.pdf",
	"STCW 1978 tema 14a Panama" => "stcw1978tema14a-panama.pdf",
	"STCW 1978 tema 14b Panama" => "stcw1978tema14b-panama.pdf",
	"STCW 1978 tema 15 Panama" 	=> "stcw1978tema15panama.pdf",
	"STCW 1978 tema 16 Panama" 	=> "stcw1978tema16panama.pdf",
	"STCW 1978 tema 17 Panama" 	=> "stcw1978tema17panama.pdf",
	"STCW 1978 tema 18 Panama" 	=> "stcw1978tema18panama.pdf",
	"STCW 1978 tema 19 Panama" 	=> "stcw1978tema19panama.pdf",
	"STCW 1978 tema 20 Panama" 	=> "stcw1978tema20panama.pdf"
);

?>
<ol class="manila-ammendment">
	<?php foreach ($files_array as $file_title => $file_name) : ?>
		<li><a href="<?php echo $file_url . $file_name; ?>" target="_blank"><?php echo $file_title; ?></a></li>
	<?php endforeach; ?>
</ol>