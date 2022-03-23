<style>
    .nav-container{
        margin-left:5px;
        margin-right:5px;
    }
    .footer-container{
        display: flex;
        justify-content: center;
        padding: 5px;
        background-color: #45a1ff;
        color: #fff;
    }
</style>
    @section('header')
        <div class="nav-container">
                <nav class="navbar navbar-light bg-light">
                    <a class="navbar-brand" href="#">Grandmas Recipes</a>
                    <form class="form-inline my-2 my-lg-0">
                        <button class="btn btn-outline-primary my-2 my-sm-0">Create recipe</button>
                        <a class="btn btn-outline-success my-2 my-sm-0" href="login" >login</a>
                    </form>
                </nav>
        </div>
    @show
    @section('footer')
        <div class="footer-container">
                    <p>© Grandmas recipes all rights reserved</p>
        </div>
    @show