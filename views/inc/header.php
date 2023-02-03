<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Project Hub</title>
        <link rel="icon" type="image/x-icon" href="<?= ROOT?>resources/images/logo2.png" />
        <link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet" />
        <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        fontFamily: {
                            sans: ["Inter", "sans-serif"],
                        },
                    },
                },
            };
        </script>
<link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">
        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.4/dist/flowbite.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="<?= ROOT?>resources/styles/css/main.css" />
        <style>
            /* body {
            font-family: Copperplate, Papyrus, fantasy;
        } */
            .highlight {
                border: 1px solid red;
                font-weight: bold;
                font-size: 45px;
                background-color: blue;
            }
        </style>
        <style>
            body {
                animation: fadeInAnimation ease 0.5s;
                animation-iteration-count: 1;
                animation-fill-mode: forwards;
            }
            @keyframes fadeInAnimation {
                0% {
                    opacity: 0;
                }
                100% {
                    opacity: 1;
                }
            }
            .prevent-select {
                -webkit-user-select: none; /* Safari */
                -ms-user-select: none; /* IE 10 and IE 11 */
                user-select: none; /* Standard syntax */
            }
        </style>
        <script>
            let url_root = "<?= ROOT ?>";
            </script>
        <?php if(!empty($data['notify_me'])){?>
            <script>
                let notification_alert=true,message = "<?= $data['notify_message'] ?>",msg_class = "<?= $data['notify_class'] ?>",position = "<?= $data['notify_position'] ?>",duration = "<?= $data['notify_duration'] ?>";
            </script>
        <?php }else{?>
            <script>
                notification_alert=false;
            </script>
        <?php }?>
    </head>

    <body class="font-sans"></body>
</html>
