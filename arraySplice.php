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

        public function dinoSplice(int $count) : void {
            $this->dinosaurs_list = array_slice($this->dinosaurs_list, 0, $count);
        }
    }

    $dinosaurs = new DinosaursList([
        'Triceratops',
        'T-rex',
        'Velociraptor',
        'Mosasaur',
    ]);

    $dinosaurs->dinoSplice(3);
    ?>

    <div> 
        <tr> Array-Splicing (Only Showed 3 Items: Triceratops, T-rex, Velociraptor)</tr>
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
            <a class="button" href="arrayShift.php">Next</a>
            <a class="button" href="arrayPush.php">Previous</a>
        </div>
    </div>
</body>
</html>
