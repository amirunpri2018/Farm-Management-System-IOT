<!Doctype html>
<html>
<style>
    .btn-group button {
        background-color: #4CAF50; /* Green background */
        border: 1px solid green; /* Green border */
        color: white; /* White text */
        padding: 10px 24px; /* Some padding */
        cursor: pointer; /* Pointer/hand icon */
        width: 10%; /* Set a width if needed */
        display: block; /* Make the buttons appear below each other */
    }

    .btn-group button:not(:last-child) {
        border-bottom: none; /* Prevent double borders */
    }

    /* Add a background color on hover */
    .btn-group button:hover {
        background-color: #3e8e41;
    }
</style>
<body>

<h1></h1>

<div class="btn-group">
    <a href="verify_view.php" target="_blank">
    <button >Verifed</button>
    </a>
    <a href="deliver_view.php" target="_blank">
    <button>Deliverd</button>
    </a>
    <a href="pending_view.php" target="_blank">
    <button>Pending</button>
    </a>
</div>

</body>
</html>
