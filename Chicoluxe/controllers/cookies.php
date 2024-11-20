<?php
// Function to check if user has accepted cookies
function hasAcceptedCookies() {
    return isset($_COOKIE['cookie_preference']) && $_COOKIE['cookie_preference'] === 'accepted';
}

// Function to set cookies based on user preferences
function setCookies() {
    // Set essential cookies
    setcookie('essential_cookie', 'value', time() + (86400 * 30), '/');
    
    // Set additional cookies if user has accepted cookies
    if (hasAcceptedCookies()) {
        setcookie('additional_cookie', 'value', time() + (86400 * 30), '/');
    }
}

// Check if user has previously accepted cookies
if (!isset($_COOKIE['cookie_preference'])) {
    // Show cookie consent banner
    echo '<div class="cookie-banner">';
    echo '<p>This website uses cookies to improve your experience. <a href="/privacy-policy">Learn more</a></p>';
    echo '<form method="post">';
    echo '<button type="submit" name="accept_cookies">Accept Cookies</button>';
    echo '<button type="submit" name="reject_cookies">Reject Cookies</button>';
    echo '</form>';
    echo '</div>';
}

// Handle form submission to accept or reject cookies
if (isset($_POST['accept_cookies'])) {
    setcookie('cookie_preference', 'accepted', time() + (86400 * 30), '/'); // Cookie set to expire in 30 days
    setCookies(); // Set cookies based on user preferences
    header('Location: ' . $_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING']);
    exit;
} elseif (isset($_POST['reject_cookies'])) {
    setcookie('cookie_preference', 'rejected', time() + (86400 * 30), '/'); // Cookie set to expire in 30 days
    header('Location: ' . $_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING']);
    exit;
}

// Set cookies based on user preferences
setCookies();
?>