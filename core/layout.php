<!-- Set session in php -->
<?php
function active($name){
  $current = $_SERVER['REQUEST_URI'];
  if($current === $name){
    return 'active';
  }

  return null;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
<!-- Add sanitized content -->
  <?php if(!empty($meta)): ?>

<?php if(!empty($meta['title'])): ?>
  <title><?php echo $meta['title']; ?></title>
<?php endif; ?>

<?php if(!empty($meta['description'])): ?>
  <meta name="description" content="<?php echo $meta['description']; ?>">
<?php endif; ?>

<?php if(!empty($meta['keywords'])): ?>
  <meta name="keywords" content="<?php echo $meta['keywords']; ?>">
<?php endif; ?>

<?php endif; ?>
<!-- End sanitized content -->

      <meta charset="UTF-8">
      <title>Jeffrey Lor PHP Site</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <link href="./dist/css/main.min.css" type="text/css" rel="stylesheet">
  </head>
  <body>

      <div id="Wrapper">
        <nav class="navbar sticky-top navbar-dark bg-dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="index.php">My Website</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-link" aria-current="page" href="index.php">Home</a>
                <a class="nav-link" href="/example.com/public/resume.php">Resume</a>
                <a class="nav-link" href="/example.com/public/contact.php">Contact</a>
                <a class="nav-link" href="/example.com/public/users/index.php">Users</a>
                <a class="nav-link" href="/example.com/public/posts/index.php">Posts</a>
                <a class="nav-link" href="/example.com/public/login.php">Login</a>
                <a class="nav-link" href="/example.com/public/logout.php">Logout</a>
                <a class="nav-link" href="/example.com/public/register.php">Register</a>
              </div>
            </div>
          </div>
        </nav>
        

        <div class="row">
            <div id="Content">
                <?php echo $content; ?>
            </div>
        </div>
        <br>
        
        <div id="Footer" class="clearfix">
            <small>&copy; 2021 - Jeffrey Lor</small>
            <ul role="navigation">
                <li><a href="/example.com/public/terms.php">Terms of Service</a></li>
                <li><a href="/example.com/public/privacy.php">Privacy Policy</a></li>
            </ul>
        </div>

      </div>

    </div>

  </body>

</html>