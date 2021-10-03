<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/public/css/style.css">
    <title>Smart Student Helper | LowScripters</title>
</head>
<body>
    <div class="main-wrapper" id="main_page">
        <h1 class="title">Smart Student Helper</h1>
        <div class="main-container small">
            <button class="btn-logIn btn" id="btn" onclick="OpenPage('#')"><i class="fas fa-user-alt"></i></button>
            <div><button class="btn" id="btn2" onclick="OpenPage('#admin_page','#user_page','#main_page')">Создать</button></div>
            <div><button class="btn" id="btn3" onclick="OpenPage('#user_page','#main_page','#admin_page')">Посмотреть</button></div>
        </div>
    </div>
    <div class="main-wrapper hide" id="user_page">
        <div class="main-container ">
            <div class="page_arrow" onclick="OpenPage('#main_page','#user_page','#admin_page')"><i class="fas fa-arrow-left"></i></div>
            <div class="container-content">
                <div class="events-search">
                    <div class="input-container search">
						<input type="text" name="name" required autocomplete="off" id="search" onkeyup="Search()">
						<label for="name">Поиск по ключевым словам</label>
                        <span class="input-track"></span>
                        <div class="search-img"><i class="fas fa-search"></i></div>
					</div>
                </div>
                <div class="btn_modal-img" onclick="OpenWindow('#user_modal','#user_modal_back')"><i class="fas fa-user-alt"></i></div> 
                <div class="events-container" id="events-container">
                    <?php foreach($data['events'] as $row):?>
                        <span class="event">
                            <p class="event-name"><?= $row['evName'] ?></p>
                            <p class="event-des"><?= $row['evDecription'] ?></p>
                            <div class="event-time"><?= $row['evTime'] ?></div>
                            <div class="event-date"><?= $row['evDate'] ?></div>
                            <div class="event-local"><?= $row['evLocation'] ?></div>
                            <div class="event-org"><?= $row['evOrganisator'] ?></div>
                            <button class="btn">Добавить</button>
                            <form action="" method="POST">
                            <input class="event_id hide" value="<?= $row['id'] ?>" name="id">
                            <input type="submit" name="delete" class="btn" value="Удалить">
                            </form>
                        </span>
                    <?php endforeach; ?>
                </div>
            </div>
            
            <div class="user_modal hide" id="user_modal" >
                <div class="user_modal-content">
                    <div class="modal_cross" onclick="CloseWindow('#user_modal','#user_modal_back')"><i class="fas fa-times"></i></div>
                    <div class="user_modal-info">
                        <div class="user_img"><i class="fas fa-user-alt"></i></div>
                        <div class="user_name">name</div>
                    </div>
                    <div class="settings" onclick="OpenWindow('#settings_modal','#settings_modal_back')"><i class="fas fa-cog"></i>
                    </div>
                    <div class="settings_modal hide" id="settings_modal">
                        <div class="settings_modal-content">
                            <div class="modal_cross" onclick="CloseWindow('#settings_modal','#settings_modal_back')"><i class="fas fa-times"></i></div>
                           <p class="modal-title">Настройка цветовой темы</p>
                            <div class="range_container">
                                <input type="range" name="red" min="1" max="255" value="97" id="range_red" oninput="ChangeTheme()">
                                <p class="modal-text">R</p>
                            </div>
                            <div class="range_container">
                                <input type="range" name="green" min="1" max="255" value="218" id="range_green"  oninput="ChangeTheme()">
                                <p class="modal-text">G</p>
                            </div>
                            <div class="range_container">
                                <input type="range" name="blue" min="1" max="255" value="251" id="range_blue"  oninput="ChangeTheme()">
                                <p class="modal-text">B</p>
                            </div>
                        </div>
                    </div>
                    <div class="user_modal-background hide" id="settings_modal_back"></div>
                    <div class="user_favorites">ВЫБРАННЫЕ СОБЫТИЯ</div>
                </div>
            </div>
            <div class="user_modal-background hide" id="user_modal_back"></div>
        </div>    
    </div>
    <div class="main-wrapper hide" id="admin_page">
        <div class="main-container">
            <div class="">
                <button class="create-btn"><i class="fas fa-plus"></i></button>
                <div class=""></div>
            </div>
            <div class="events_list">
                <h2>Созданные</h2>
            </div>
            <div class="create_modal" id="create_modal">
                <div class="create_modal" id="create_modal">
                <div class="create_modal" id="create_modal">
                <div class="create_modal" id="create_modal">
                <div class="create_modal" id="create_modal">
                    <form action="" method="post" class="create_modal-content">
                        <h2>Создать мероприятие</h2>
                        <div class="modal_cross" onclick="OpenPage('#main_page','#admin_page','#user_page')"><i class="fas fa-times"></i></div>
                        <input type="text" name="eve_name" id="eve_name" placeholder="Название">
                        <textarea name="eve_description" id="eve_desription" placeholder="Описание" cols="30" rows="10"></textarea>
                        <input type="text" name="eve_date" id="eve_date" placeholder="Время">
                        <input type="text" name="eve_time" id="eve_time" placeholder="Дата">
                        <input type="text" name="eve_location" id="eve_location" placeholder="Аддрес">
                        <input type="text" name="eve_organizer" id="eve_organizer" placeholder="Организатор">
                        <input type="submit" class="create_modal-btn btn submit" name="submit" value="Создать">
                    </form>
            </div>
            <div class="create_modal-background" id="create_modal_back"></div>
        </div>
    </div>
   


    <script src="https://kit.fontawesome.com/c11f955d35.js" crossorigin="anonymous"></script>
    <script src="/public/js/script.js"></script>
    <script src="/public/js/theme.js"></script>
</body>
</html>