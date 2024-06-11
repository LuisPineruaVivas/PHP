<?php 
    $name = 'Luis';
    $edad = 65;
    define('Logo_url', 'https://images.pexels.com/photos/1402787/pexels-photo-1402787.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');

    $output = "Hola \"$name\"";
    $output .= ", que tiene $edad años. Todo bien";

    const NOMBRE = 'Luis2';
    $isOld = $edad > 30;
    $isDev = true;

    $output_age = $isOld ? 'Eres viejo' : 'Eres joven';

    $output_edad = match (true){
        $edad < 2   => "Eres un bebe, $name" ,
        $edad < 10  => "Eres un niño, $name",
        $edad < 18  => "Eres un adolescente, $name",
        $edad == 18 => "Eres mayor de edad, $name",
        $edad < 40  => "Eres un adulto joven, $name",
        $edad < 60  => "Eres un adulto viejo, $name",
        default     => "Ya esta viejo, $name ",
    };

    $bestlanguages = ["PHP", "JavaScript", "Python"];
    $bestlanguages[] = "Java";
    $bestlanguages[] = "TypeScript";

    $person = [
        "name" => "Luis",
        "Age" => 24,
        "isDev" => true,
        "Languages" => ["Python", "PHP"]
    ];

    $person["name"] = "Luis Piñerua Vivas";
?>

<ul>
    <?php foreach ($bestlanguages as $key => $language) : ?>
        <li style="list-style: none;"><?= $key." - ". $language ?></li>
    <?php endforeach; ?>
</ul>

<?php if($isOld) : ?>
    <h2> Eres Viejo </h2>
<?php elseif ($isDev) : ?>
    <h2> No Eres Viejo Pero Eres Dev Estas Jodido </h2>
<?php else : ?>
    <h2> Eres Joven </h2>
<?php endif; ?>



<img src="<?= Logo_url ?>" alt="Imagen" width="200">
<h1><?= $output ?></h1>
<h2><?= $output_age ?></h2>
<h1><?= $output_edad ?></h1>

<a href="demo.php"> Demo </a>

<style>
    :root{
        color-scheme: light dark;
    }

    body{
        display: grid;
        place-content: center;
    }
</style>


