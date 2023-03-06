<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Brochure form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


    <div class ="container mt-5">
        <form  action ="makepdf.php" method="post" class ="offset-md-3 col-md-6">
            <h1>Create your own brochure</h1>
            <p>fill out the details below</p>
            <div class="mb-2">
            <input type="text" name="sname" placeholder="What is name of product or service?" class="form-control" required>
            </div>
            <div class="mb-2">
            <input type="text" name="tagline" placeholder="What is your Tagline?" class="form-control" required>
            </div>
            <div class="mb-2">
            <textarea name="benifits" placeholder="What are major benifits" class="form-control" required></textarea>
            </div>
            <div class="mb-2">
            <textarea name="intro" placeholder="Give brief introduction " class="form-control" required></textarea>
            </div>
            <div class="mb-2">
            <textarea name="testimonial1" placeholder="Give user testimonial 1" class="form-control" required></textarea>
            </div>
            <div class="mb-2">
            <textarea name="testimonial2" placeholder="Give user testimonial 2" class="form-control" required></textarea>
            </div>
            <div class="mb-2">
            <input type="email" name="email" placeholder="Email" class="form-control" required>
            </div>
            <div class="mb-2">
            <input type="tel" name="number" placeholder="What is your contact number" class="form-control" required>
            </div>
            <div class="mb-2">
            <input type="text" name="address" placeholder="Enter address" class="form-control" required>
            </div>
            <div class="mb-2">
            <input type="text" name="url" placeholder="Website" class="form-control" required>
            </div>
            <div class="mb-2">
            <input type="text" name="remarks" placeholder="Add closing remarks" class="form-control" required>
            </div>
            <div class="mb-2">
            <input type="text" name="punchline1" placeholder="Enter punchline 1" class="form-control" required>
            </div>
            <div class="mb-2">
            <input type="text" name="punchline2" placeholder="Enter punchline 2" class="form-control" required>
            </div>
            <div class="mb-2">
            
            <div class="mb-2">
            <button type="submit" class="btn btn-success">Create brochure</button>
            </div>
        </form>
    </div>
</body>

</html>