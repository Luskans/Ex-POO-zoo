<div style="width: 100%" class="d-flex justify-content-center align-items-center">
    <form class="d-flex flex-column justify-content-center align-items-center gap-3" action="./controllers/add_zoo.php" method="post">
        <label for="name">Choose a name for your zoo :</label>
        <input type="text" name="name" required>

        <div class="d-flex gap-2">
            <label for="easy">Easy</label>
            <input type="radio" name="difficulty" value="easy" required>
        </div>
        
        <div class="d-flex gap-2">
            <label for="medium">Medium</label>
            <input type="radio" name="difficulty" value="medium">
        </div>
        
        <div class="d-flex gap-2">
            <label for="hard">Hard</label>
            <input type="radio" name="difficulty" value="hard">
        </div>

        <button type="submit">Create</button>
    </form>
</div>