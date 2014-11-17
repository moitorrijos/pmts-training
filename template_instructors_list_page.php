<?php 
/*
Template Name: Instructors Page
*/
get_header();
$this_is_page=true;

$instructors_list = array(

'Miguel Tuñon',
'Juan C. Caballero',
'Hector Mojica',
'Faustino Gonzalez',
'Cesar Reyes',
'Billy Oro',
'Moises Torrijos',
'Edgar Hurtado',
'Moises Ricord',
'Overseas Intructors',
'Omar Cardozo',
'Victor Thompson',
'Kyck Hydes',
'Edwin Aye  Tut',
'Andres Vasquez',
'Roberto Forgas',
'Carlos Molina',
'Luis Pariona',
'El Masry Adel',
'Dimitris Spanos',
'Jihad Ghamraoui',
'Nikolaos Giamakidis',
'Karavias Georgios',
'Rapitis Georgios',
'Duane Southe',
'Methat Abdelmegeed',
'Amine El Rayes',
'Pietro Ferrara',
'Felice Patruno',
'Ariadna Aguilar',
'Gina Dos Santos',
'Ahmed Samir',
'Josiah Trevor',
'Kaligotla Apparao'

);

function random_date_1()
{
    // Convert to timetamps
    $min = strtotime('1 August 2014');
    $max = strtotime('10 August 2014');

    // Generate random number using above bounds
    $val = rand($min, $max);

    // Convert back to desired date format
    return date('d F, Y', $val);
}

function random_date_2()
{
    // Convert to timetamps
    $min = strtotime('15 August 2014');
    $max = strtotime('31 August 2014');

    // Generate random number using above bounds
    $val = rand($min, $max);

    // Convert back to desired date format
    return date('d F, Y', $val);
}

?>



<div class="sub_header">
 
</div>

<div class="content_con2">

<!-- content -->
<div class="content sub fullwidth">
        <h2><?php the_title(); ?></h2>
		<table id="instructors">
			<tr>
				<th>Name of Instructor</th>
				<th>Beginning Date</th>
				<th>Ending Date</th>
				<th>Exam Score</th>
			</tr>
			<?php foreach( $instructors_list as $instructor_name ) : ?>
			<tr>
				<td><?php echo $instructor_name; ?></td>
				<td><?php echo random_date_1(); ?></td>
				<td><?php echo random_date_2(); ?></td>
				<td><?php echo rand(80, 100); ?>%</td>
			</tr>
			<?php endforeach; ?>
		</table>
</div>
<!-- / content -->
<div class="clear"></div>
<?php get_footer();?> 