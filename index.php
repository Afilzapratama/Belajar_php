<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #merah {
            height : 200px;
            background-color: red;
        }
        #biru {
            height : 200px;
            background-color: blue;
        }
        #kuning {
            height : 200px;
            background-color: yellow;
        }
        #hijau {
            height : 200px;
            background-color: green;
        }
        #hitam {
            height : 200px;
            background-color: black;
        }
        #coklat {
            height : 200px;
            background-color: brown;
        }
        #magenta {
            height : 200px;
            background-color: magenta;
        }
        #abu {
            height : 200px;
            background-color: grey;
        }
        #pink {
            height : 200px;
            background-color: pink;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 p-3 border-end ">
                <?php include 'menu.php'; ?>
            </div>

            <div class="col-md-10 p-4">
                <!-- //////////////////////////////////////// -->
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6" id="merah"></div>
                        <div class="col-md-6" id="biru"></div>
                        <div class="col-md-3" id="kuning"></div>
                        <div class="col-md-3" id="hijau"></div>
                        <div class="col-md-3" id="hitam"></div>
                        <div class="col-md-3" id="coklat"></div>
                        <div class="col-md-4" id="abu"></div>
                        <div class="col-md-4" id="magenta"></div>
                        <div class="col-md-4" id="pink"></div>
                    </div>
                </div>
                <!-- //////////////////////////////////////// -->
            </div>
        </div>
    </div>
</body>
</html>