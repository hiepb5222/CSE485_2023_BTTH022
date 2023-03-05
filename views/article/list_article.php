<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music for Life</title>
    <link rel="stylesheet" href="css/style_login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body style=" height: 100%;
    margin: 0;
    padding: 0;">
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary shadow p-3 bg-white rounded">
            <div class="container-fluid">
                <div class="h3">
                    <a class="navbar-brand" href="#">Administration</a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="./">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Trang ngoài</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="category.php">Thể loại</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="author.php">Tác giả</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fw-bold" href="article.php">Bài viết</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="users.php">Người dùng</a>
                    </li>
                </ul>
                <a class="nav-link " href="process_logout.php">Logout</a>
                </div>
            </div>
        </nav>
        
    </header>
    <main class="container mt-5 mb-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="row">
            <div class="col-sm">
                <a href="./index.php?controller=article&action=add" class="btn btn-success">Thêm mới</a>           
                <table class="table">
                    <thead>
                        
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tiêu đề</th>
                            <th scope="col">Tên bài hát</th>
                            <th scope="col" class="col-sm-1">Tên thể loại</th>
                            <th scope="col">Tóm tắt</th>
                            <th scope="col" class="col-sm-1">Nội dung</th>
                            <th scope="col">Tác giả</th>
                            <th scope="col" class="col-sm-1">Ngày Viết</th>
                            <th scope="col">Hình ảnh</th>
                            <th class="col-sm-1">Chức năng</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $count =0;
                    foreach($articles as $article){
                        $count++;
                        ?>
                        <tr>
                            <td><?php echo $count?></td>
                            <td><?php echo $article->getTitle()?></td>
                            <td><?php echo $article->getSong_name()?></td>
                            <td><?php echo $article->getCat_name()?></td>
                            <td><?php echo $article->getSummary()?></td>
                            <td><?php echo $article->getContent()?></td>
                            <td><?php echo $article->getAuthor_name()?></td>
                            <td><?php echo date("d-m-Y", strtotime($article->getDate()))?></td>
                            <td>
                                
                                <img style="width: 100px;" src="/CSE485_2023_BTTH02/views/image/songs/<?php echo $article->getImage()?>">
                                <!-- <img src="/CSE485_2023/images/logo2.png"> -->
                            </td>
                            <td >
                                <a href="./index.php?controller=article&action=edit&sid=<?php echo $article->getArticle_id() ?>" ><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="./index.php?controller=article&action=delete&sid=<?php echo $article->getArticle_id() ?>" style="margin-left: 20px;" onclick="return confirm('Bạn có muốn xóa bản ghi hay không?');"><i class="fa-solid fa-trash"></i></a>
                            </td>
                            <!-- <td>
                            </td> -->
                        </tr>
                            <?php
                    }
                    ?>
                          
                       
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <footer class="footer bg-white d-flex justify-content-center align-items-center border-top border-secondary  border-2" style="height:80px;">
        <h4 class="text-center text-uppercase fw-bold">TLU's music garden</h4>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
