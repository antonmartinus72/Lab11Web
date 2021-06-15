<?= $this->include('template/header'); ?>

<section id="wrapper">
    <section id="main">
        <div class="kontak">
            <h2>Please fill the form to contact the website owner.</h2>
            <fieldset>
                <legend> Enter your identity </legend>
                <form action="mailto:someone@example.com" method="post" enctype="text/plain">
                    <div>
                        <label for="name">Name</label>:
                        <input type="text" name="name" id="name"><br>
                    </div>
                    <div>
                        <label for="mail">E-mail</label>:
                        <input type="email" name="mail" id="mail"><br>
                    </div>
                    <div>
                        <label for="subject">Subject</label>:
                        <input type="text" name="subject" id="subject"><br>
                    </div>
                    <div>
                        <label for="message">Message</label>:<input type="hidden">
                        <br>
                        <textarea name="message" id="message" rows="15" cols="50">Please fill the text here.</textarea>
                    </div>
                    <div>
                        <button type="submit" value="Submit">Submit</button>
                    </div>

                </form>
            </fieldset>
        </div>

        <?= $this->include('template/footer'); ?>