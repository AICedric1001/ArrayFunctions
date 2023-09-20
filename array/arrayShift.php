
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

        public function removeDinosOnTop(string $dino_name) : void {
            array_shift($this->dinosaurs_list);
        }
    }

    $dinosaurs = new DinosaursList([
        'Triceratops',
        'T-rex',
        'Velociraptor',
        'Mosasaur',
    ]);

    $dinosaurs->removeDinosOnTop('Triceratops');
    ?>

    <div> 
        <tr> Array-Shifting (Triceratops was removed!) </tr>
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
            <a class="button" href="arraySplice.php">Previous</a>
        </div>
    </div>
</body>
</html>

