<!DOCTYPE html>
<style>
    header{
        margin-left:5px;
        margin-right:5px;
    }
    footer {
        display: flex;
        justify-content: center;
        padding: 5px;
        background-color: #45a1ff;
        color: #fff;
    }
</style>
<body>
    @section('header')
        <header>
                <nav class="navbar navbar-light bg-light">
                    <a class="navbar-brand" href="#">Grandmas Recipes</a>
                    <form class="form-inline my-2 my-lg-0">
                        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Create recipe</button>
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">login</button>
                    </form>
                </nav>
        </header>
    @show
    @section('footer')
        <footer>
                    <p>© Grandmas recipes all rights reserved</p>
        </footer>
    @show
    </body>
</html>