<?php

// Start the session
// !!Session is already started since the file is required!!
/*session_start();

$username;

// If user is logged in, get username
if ($_SESSION['username']) {
    $username = $_SESSION['username'];
}*/

// Display a logout link
echo "<nav class='navbar navbar-light navbar-expand-md'>
            <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse' id='navbarSupportedContent'>
                <ul class='navbar-nav mr-auto'>
                    <li class='nav-item'>
                        <a class='nav-link nav text-primary' href=$navLink>$navText</a>
                    </li>
                </ul>
            </div>
        </nav>
</nav>";
?>