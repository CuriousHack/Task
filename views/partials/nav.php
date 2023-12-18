<div class="nav">
<?php if (isset($_SESSION['user'])) : ?>
    <div class="logo">
        <a href="/tasks"><img src="../img/logo.png" class="logo" alt="Taskit logo"></a>
    </div>
    <div class="links">
        <a href="/create"><button class="btn" style="width:auto;">+</button></a>
        <a href="#"><img class="avatar" src="../img/user.jpg" alt="User avatar" onclick="toggleMenu();"></a>
        <div class="sub-menu-wrap" id="subMenu">
            <div class="sub-menu">
                <div class="user-info">
                    <img src="../img/user.jpg">
                        <h3><?= $_SESSION['user']['username'] ?></h3>
                </div>
                <hr>
                <!-- <a href="#"class="sub-menu-link">
                    <img src="../img/profile.png">
                    <p>Edit Profile</p>
                </a> -->
                <a href="/logout"class="sub-menu-link">
                    <img src="../img/profile.png">
                    <p>Logout</p>
                </a>
                
            </div>
        </div>
    </div>
    <?php else : ?>
        <div class="logo">
        <a href="/"><img src="../img/logo.png" class="logo" alt="Taskit logo"></a>
    </div>
    <?php endif; ?>
</div>