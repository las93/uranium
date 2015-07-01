    <section id="Experience_area" class="section_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="skills">
                        <div class="skill_right"><p><a href="{url alias='home'}" style="color:white">Accueil</a> &gt; Contactez-nous</p><br/></div>
                       {if isset($app.post.name)}
                       <table style="border:solid 2px green;background-color:#DDFFDD;color:green;">
                         <tr>
                          <td style="padding:10px;">Votre message a bien été envoyé à Scrum-Agile.com</table>
                         </tr>
                       </table><br/>
                       {else}
                       <h2>Contactez-nous</h2>
                       <form name="contact" method="post">
                        <table border="0">
                         <tr>
                          <td style="padding:2px;">Votre nom :</td>
                          <td style="padding:2px;"><input type="text" name="name" style="color:gray;width:200px;" required placeholder="Indiquez votre nom..."/></td>
                         </tr>
                         <tr>
                          <td style="padding:2px;">Votre email :</td>
                          <td style="padding:2px;"><input type="email" name="email" style="color:gray;width:200px;" required placeholder="Indiquez votre email..."/></td>
                         </tr>
                         <tr>
                          <td style="padding:2px;">Votre téléphone :</td>
                          <td style="padding:2px;"><input type="phone" name="phone" style="color:gray;width:200px;" placeholder="Indiquez votre téléphone..."/></td>
                         </tr>
                         <tr>
                          <td colspan="2" style="padding:2px;">Votre message :</br><textarea name="message" style="width:100%;height:100px;color:gray;" required></textarea></td>
                         </tr>
                         <tr>
                          <td colspan="2" style="padding:2px;"><input type="submit" style="color:gray;width:100%;"></td>
                         </tr>
                        </table>
                       </form>
                       {/if}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="story_image wow slideInLeft" data-wow-duration="2s">
                        <img src="/img/contact.jpg" alt="">
                    </div>
                    <br/>
                    <h2>Contactez-nous directement par mail</h2>
                    <a href="mailto:info@scrum-agile.com" style="color:white">info@scrum-agile.com</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end of story area -->