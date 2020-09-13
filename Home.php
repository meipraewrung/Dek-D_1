<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตั้งกระทู้ใหม่</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--Get your code at fontawesome icon-->
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--CSS-->
    <style>
        .headName {
            text-align: center;
            color: #FF6600;
            padding-top: 1em;
        }

        .titleIcon {
            font-size: 29px;
            color: #CC6600;
        }

        .boxTitle {
            text-align: center;
            color: #CC6600;
        }

        .btn {
            width: 100px;
            margin: 0 auto;
            display: block;
        }
    </style>
</head>

<body>
    <form action="submits.php" method="POST">
        <div class="container">
            <div class="form-group">
                <div class="row">
                    <div class="col-12">
                        <h1 class="headName"><b>ตั้งกระทู้ใหม่</b></h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1 boxTitle">
                        <i class="fa fa-pencil titleIcon"></i>
                    </div>
                    <div class="col-11">
                        <input id="tName" type="text" class="form-control" name="title" placeholder="หัวข้อกระทู้" required pattern=".{4,140}" title="4-140 characters">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-12">
                        <label for="dName">เนื้อหากระทู้</label><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <textarea rows="8" cols="30" wrap="virtual" id="deConName" class="form-control" name="content" minlength="6" maxlength="2000" placeholder="เนื้อหากระทู้" required></textarea>
                    </div>
                </div>
                <br>
                <button class="btn btn-warning" type="submit" value="Submit">สร้างกระทู้</button>
            </div>
        </div>
    </form>
</body>

</html>