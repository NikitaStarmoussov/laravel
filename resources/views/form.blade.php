<form action="/submit-form" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Your Name">
    <input type="email" name="email" placeholder="Your Email">
    <button type="submit">Submit</button>
</form>
