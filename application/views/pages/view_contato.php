<main class="flex-shrink-0">

    <section class="py-5">
        <div class="container">


            <!-- Contact form-->
            <div class="bg-<?php echo empty($this->session->userdata('theme_global')) ? 'dark' : $this->session->userdata('theme_global'); ?> rounded-4 py-5 px-4 px-md-5">
                <div class="text-center mb-4">
                    <h1 class="fw-bolder contato-title">Entre em contato
                        <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-0 ms-2">
                            <i class="bi bi-envelope"></i>
                        </div>
                    </h1>
                    <p class="lead fw-normal text-muted mb-0">Vamos trabalhar juntos!</p>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-12 col-md-12 col-lg-12">
                        <?php $flash_message = $this->session->flashdata('flash_message'); ?>
                        <?php if (isset($flash_message)) { ?>
                        <div class="flash-message d-flex justify-content-center">
                            <div
                                class="w-100 text-center alert-dismissible fade show alert flash alert-<?php echo $flash_message['tipo']; ?>">
                                <h5><?php echo $flash_message['mensagem']; ?></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>

                            </div>
                        </div>
                        <?php } ?>
                    </div>

                    <?php echo form_open('contato/enviar', ['id' => 'contactForm', 'class' => 'row']); ?>
                    <!-- Name input-->
                    <div class="col-12 mb-3">
                        <div class="form-floating ">
                            <?php echo form_input('nome', set_value('nome'), ['class' => !empty($error['nome']) ? 'form-control border-danger js-input-nome' : 'form-control js-input-nome', 'id' => 'name', 'placeholder' => 'Informe seu nome', 'required' => 'required']); ?>
                            <!-- <input class="form-control" id="name" name="nome" type="text" placeholder="Enter your name..." data-sb-validations="required" /> -->
                            <label for="name">Nome completo *</label>
                        </div>
                        <?php if (!empty($error['nome'])) { ?>
                        <p class="mb-0 text-danger"><small><?php echo $error['nome']; ?></small></p>
                        <?php } ?>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 mb-3">
                        <!-- Email address input-->
                        <div class="form-floating ">
                            <?php echo form_input('email', set_value('email'), ['class' => !empty($error['email']) ? 'form-control border-danger js-input-email' : 'form-control js-input-email', 'id' => 'name', 'placeholder' => 'Informe seu email', 'required' => 'required']); ?>
                            <label for="name">E-mail *</label>
                        </div>
                        <?php if (!empty($error['email'])) { ?>
                        <p class="mb-0 text-danger"><small><?php echo $error['email']; ?></small></p>
                        <?php } ?>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6  mb-3">
                        <!-- Phone number input-->
                        <div class="form-floating">
                            <?php echo form_input('celular', set_value('celular'), ['class' => !empty($error['celular']) ? 'form-control border-danger js-input-celular ' : 'form-control js-input-celular ', 'id' => 'phone', 'placeholder' => '(##) #####-####', 'required' => 'required', 'attrname' => 'maskphone']); ?>
                            <label for="name">Celular/Whatsapp *</label>
                        </div>
                        <?php if (!empty($error['celular'])) { ?>
                        <p class="text-danger"><small><?php echo $error['celular']; ?></small></p>
                        <?php } ?>
                    </div>

                    <div class="col-12  mb-3">
                        <!-- Message input-->
                        <div class="form-floating">
                            <textarea class="<?php echo !empty($error['mensagem']) ? 'form-control border-danger' : 'form-control'; ?> js-input-message" id="message" name="mensagem" type="text" placeholder="Informe sua mensagem"
                                style="height: 10rem" required="required"> <?php echo set_value('mensagem'); ?></textarea>
                            <label for="message">Mensagem *</label>

                        </div>
                        <?php if (!empty($error['mensagem'])) { ?>
                        <p class="mb-0 text-danger"><small><?php echo $error['mensagem']; ?></small></p>
                        <?php } ?>
                    </div>
                    <!-- Submit Button-->
                    <div class="d-grid"><button class="btn btn-primary btn-lg js-btn-enviar-email" id="submitButton"
                            type="submit">Enviar</button></div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </section>
</main>
