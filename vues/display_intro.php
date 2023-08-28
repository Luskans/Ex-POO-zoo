<form action="./controllers/process_intro.php" method="post">
    <label for="name">Choose a name for your zoo :</label>
    <input type="text" name="name" required>

    <label for="easy">Easy</label>
    <input type="radio" name="difficulty" value="easy" required>

    <label for="medium">Medium</label>
    <input type="radio" name="difficulty" value="medium">

    <label for="hard">Hard</label>
    <input type="radio" name="difficulty" value="hard">

    <button type="submit">Create</button>
</form>