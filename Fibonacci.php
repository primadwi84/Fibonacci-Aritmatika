<!doctype html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Fibonacci</title>
        <link rel="stylesheet" href="Fibonacci.css">
        <script src= "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    </head>

    <!-- Awal Isi Menu Sign In -->
    <body>

        <form action="Fibonacci.php" class="fibonacci-form" method="POST">
            <h1>Menghitung  Deret Fibonachi</h1>

            <div class="txtb">
                <input type="number" name="deret1">
            <span data-placeholder="Input Deret Pertama"></span>  
            </div>

            <div class="txtb">
                <input type="number" name="deret2">
                <span data-placeholder="Input Deret Kedua"></span>
            </div>

            <div class="txtb">
                <input type="number" name="jumlah">
                <span data-placeholder="Jumlah Deret Bilangan"></span>
            </div>

            
            <input type="submit" class="submit" value="Submit" name="run">

            <?php 

                if (isset($_POST['run']))
                {

                    $b1 = $_POST['deret1'];
                    $b2 = $_POST['deret2'];
                    $jumlah = $_POST['jumlah'];
                    
                    echo " <br> Deret Fibonachi : $b1 $b2"; //  menampilkan 2 deret bilangan awal
                    
                    for ($i=$b1; $i<=$jumlah; $i++)
                    {

                    $output = $b2 + $b1;
                    echo " $output";
                    
                    $b1 = $b2;  // reset bilangan pertama jadi bilangan kedua dst
                    $b2 = $output; // bilangan kedua jadi bilangan yg baru
                    }

                } 
            ?>

        </form>


    <!-- Akhir Isi Menu Sign Up -->

        <!-- Awal Linear Gradien -->
        <script type="text/javascript">
            $(".txtb input").on("focus",function(){
                $(this).addClass("focus");
            });

            $(".txtb input").on("blur",function(){
                if($(this).val()== "")
                $(this).removeClass("focus");
            });
        
        </script>
        <!-- Akhir Linear Gradien -->


    </body>
  ...
</html>