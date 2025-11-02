    <?php $currentPage = $_SERVER['REQUEST_URI'] ?>
    
    <div>
           <ul  class="link-wrapper">
               <li class="link-item <?php if ($currentPage === '/index.php' || $currentPage === '/') echo 'active'; ?>">
                   <a href="/index.php">
                       главная
                   </a>
               </li>
            <li class="link-item <?php if (strpos($currentPage, 'my-projects.php') !== false) echo 'active'; ?>">
                <a href="/templates/my-projects.php">
                    мои проекты
                </a>
            </li>
               <li class="link-item <?php if (strpos($currentPage, 'favorite-games.php') !== false) echo 'active'; ?>">
                   <a href="/templates/favorite-games.php">
                       мои любимые игры
                   </a>
               </li>
           </ul>
    </div>

            <?php include('templates/technology-stack.php'); ?>


