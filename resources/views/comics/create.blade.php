<form action="{{ route('comics.store') }}" method="POST">
    @csrf
    <label for="title">Title:</label>
    <input type="text" name="title" id="title" required>
    <br>
    <label for="description">Description:</label>
    <textarea name="description" id="description" required></textarea>
    <br>
    <label for="thumb">Thumbnail:</label>
    <input type="text" name="thumb" id="thumb" required>
    <br>
    <label for="price">Price:</label>
    <input type="text" name="price" id="price" required>
    <br>
    <label for="series">Series:</label>
    <input type="text" name="series" id="series" required>
    <br>
    <label for="sale_date">Sale Date:</label>
    <input type="date" name="sale_date" id="sale_date" required>
    <br>
    <label for="type">Type:</label>
    <input type="text" name="type" id="type" required>
    <br>
    <label for="artists">Artists:</label>
    <input type="text" name="artists" id="artists" required>
    <br>
    <label for="writers">Writers:</label>
    <input type="text" name="writers" id="writers" required>
    <br>

    <button type="submit">Save</button>
</form>
