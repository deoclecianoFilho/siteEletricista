<html>
<body>
    <script src="https://kit.fontawesome.com/0a51009c14.js" crossorigin="anonymous"></script>
    <script src="../javascript/jquery.min.js"></script>
    <script src="../javascript/app.js"></script>
    <link rel="stylesheet" href="../css/contato.css">

    <section class="form-container">
        <div class="container">

            <div class="home">
                <a href="../index.php">Home</a><i class="fa-solid fa-angles-right"></i><p>contate nos</p>
            </div>
        
            <div class="info">
                <div class="titulo">
                    <h3>Vamos entrar em contato</h3>
                    <h2>Detalhes de contato</h2>
                    <span>____</span>
                </div>
                <div class="mais">
                    <a href="https://wa.me/message/W6MWR6DNXI34G1"><p><i class="fa-brands fa-whatsapp"></i> Phone: <span>(62) 99456-6492</span></p></a> 
                    <a href="info@tecnodeo.com"><p><i class="fa-solid fa-envelope"></i> E-mail: <span>info@tecnodeo.com</span></p></a> 
                    <p>Indereco: Rua Jp 55 Jardim Primavera</p>
                    <p>Horaio De Funcionamento:</p>
                    <p>Segunda — Sexta 80:00 – 18:00</p>
                    <p>Sabado — Domindo 09:00 – 12:00</p>
                    <span><i class="fa-brands fa-linkedin"></i><i class="fa-brands fa-instagram"></i><i class="fa-brands fa-twitter"></i><i class="fa-brands fa-facebook"></i></span>
                </div>

            </div>
            <div class="form">

                <form method="POST" action="../enviar.php">
                    <h2>Entri em contato</h2>
                    <p>Preencha o formulario abaixo e entraremos em contato com você </i></p>
                    <div class="input-single">
                        <input type="text" name="nome" id="nome" class="input" require >
                        <label for="nome">Seu nome conpleto</label>
                    </div>
                    <div class="input-single">
                        <input require type="email" name="email" id="email" class="input" >
                        <label for="email">Seu e-mail</label>
                    </div>
                    <div class="input-single">
                        <input require type="text" name="contato" id="contato" class="input" >
                        <label for="contato">Seu numero de telefone </label>
                    </div>
                    <div class="btn"><input type="submit" value="Envia!"></div>
                </form>
            </div>
        </div>
    </section>
        
</body>
</html>