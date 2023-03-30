<?php
    include("../templates/header.php");
?>

<div>
    <span class="title-add">
        <h1>Add</h1>
    </span>
    <form action="/functions/create.php" method="post">
        <label for="Name">
            Name
            <input type="text" id="Name" name="Name" placeholder="Name" required>
        </label>
        <label for="Phone">
            Phone
            <input type="number" min="0" id="Phone" name="Phone" placeholder="Phone" required>
        </label>
        <button type="submit">Create</button>
    </form>
</div>

<?php
    include("../templates/footer.php");
?>