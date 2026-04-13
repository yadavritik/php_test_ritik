<?php 
include 'db.php';
if($_SERVER['REQUEST_METHOD']==="POST"){
    $fname = $_POST['fname'];
    $username = $_POST['uname'];
    $email = $_POST['email'];
    $phone = $_POST['number'];
    $pass =password_hash($_POST['password'],PASSWORD_DEFAULT); 
    $sql = $conn->prepare("insert into register values(?,?,?,?,?)");
    $sql->bind_param('sssis',$fname,$username,$email,$phone,$pass);
    if($sql->execute()){
        header("Location:login.php");
    }

}




?>

<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main >
            <h3 class="text-center mt-5 borderd-shadow">RIGISTRATION FORM</h3>
            <div class="container borderd-shadow  col-4 ">
<form action="" method="POST" class="border p-4 shadow rounded">
         <div class="mb-3">
            <label for="" class="form-label">FULL NAME</label>
            <input
                type="text"
                class="form-control"
                name="fname"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
          
         </div>

         <div class="mb-3">
            <label for="" class="form-label">USER NAME</label>
            <input
                type="text"
                class="form-control"
                name="uname"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
          
         </div>

         <div class="mb-3">
            <label for="" class="form-label">EMAIL</label>
            <input
                type="text"
                class="form-control"
                name="email"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
          
         </div>

         <div class="mb-3">
            <label for="" class="form-label">PHONE NUMBER</label>
            <input
                type="text"
                class="form-control"
                name="number"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
          
         </div>

         <div class="mb-3">
            <label for="" class="form-label">PASSWORD</label>
            <input
                type="text"
                class="form-control"
                name="password"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
          
         </div>
                <button
                type="submit"
                class="btn btn-primary"
            >
                Submit
            </button>
            


         
         



            </div>
            </form>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
