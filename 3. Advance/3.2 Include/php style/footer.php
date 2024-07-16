<style>
    /* Footer styles */
    footer {
        background-color: #333;
        color: #fff;
        padding: 20px;
        text-align: center;
    }

    footer p {
        margin: 0;
        padding: 5px 0;
    }

    footer .social-media {
        margin: 20px 0;
    }

    footer .social-media a {
        color: #fff;
        margin: 0 10px;
        text-decoration: none;
    }

    footer .social-media a:hover {
        text-decoration: underline;
    }

    footer .contact-info {
        margin: 10px 0;
    }

    footer .contact-info p {
        margin: 5px 0;
    }

    footer .newsletter {
        margin: 20px 0;
    }

    footer .newsletter input[type="email"] {
        padding: 10px;
        margin-right: 10px;
        border: none;
        border-radius: 5px;
    }

    footer .newsletter button {
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        background-color: #555;
        color: #fff;
        cursor: pointer;
    }

    footer .newsletter button:hover {
        background-color: #777;
    }
</style>

<footer>
    <?php
    echo "<p>Copyright &copy; 1999-" . date("Y") . " W3Schools.com</p>";
    ?>
    <div class="social-media">
        <a href="https://facebook.com" target="_blank">Facebook</a>
        <a href="https://twitter.com" target="_blank">Twitter</a>
        <a href="https://instagram.com" target="_blank">Instagram</a>
    </div>
    <div class="contact-info">
        <p>Email: info@w3schools.com</p>
        <p>Phone: +1 234 567 890</p>
        <p>Address: 123 W3Schools St, Web City, WS 12345</p>
    </div>
    <div class="newsletter">
        <p>Subscribe to our newsletter:</p>
        <form action="#">
            <input type="email" placeholder="Enter your email">
            <button type="submit">Subscribe</button>
        </form>
    </div>
</footer>
