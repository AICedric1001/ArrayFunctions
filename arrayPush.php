<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cool Dinosaurs Page</title>
</head>
<body>
<div class="navbar">
        <a href="index.php">Home</a>
        <!-- Add other navigation links as needed -->
    </div>

    <?php
    class DinosaursList {
        protected $dinosaurs_list = [];

        public function __construct($list) {
            $this->dinosaurs_list = $list;
        }

        public function displayDinos() : array {
            return  $this->dinosaurs_list;
        }

        public function addDinosOnBottom(string $dino_name) : void {
            array_push($this->dinosaurs_list, $dino_name);
        }
    }

    $dinosaurs = new DinosaursList([
        'Triceratops',
        'T-rex',
        'Velociraptor',
        'Mosasaur',
    ]);

    $dinosaurs->addDinosOnBottom('Microraptor');
    $dinosaurs->addDinosOnBottom('Iguanodon');
    $dinosaurs->addDinosOnBottom('Spinosaurus');
    ?>

    <div> 
        <tr> Array-Pushing (Microraptor, Iguanodon, Spinosaurus was added!) </tr>

    </div>
    <div class="container">
        <table>
            <tr>
                <th><b>Dinosaurs!</b></th>
            </tr>
            <?php foreach ($dinosaurs->displayDinos() as $key => $value): ?>
                <tr>
                    <td><?php echo $value; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <div class="button-container">
            <a class="button" href="arraySplice.php">Next</a>
        </div>
    </div>
</body>
</html>
