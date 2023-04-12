var A = {};
A.nicname = null;
A.users_online = [];
A.nicname = null;
A.socket = null;
A.form = null;
A.options = {};
A.listReceived = false;

async function sleep(delay) {
    return new Promise((resolve, reject) => {
        setTimeout(resolve, delay);
    });
}

/**
 * инициализация приложения
 **/
A.init = function(){
    A.socket = Socket;
    A.socket.init(A);
    A.setEventHandlers();
    A.form = document.getElementById('login-form');
    A.form.addEventListener('submit', A.login);
    A.form = document.getElementById('login-form');
    A.form.addEventListener('submit', A.login.bind(A));


};

/**
 * Установка обработчиков на события рассылаемые сервером
 **/
A.setEventHandlers = function(){
    A.socket.setEventHandler('users_online', A.fillUsersOnline);
};

A.fillUsersOnline = function(data){
    console.log('fillUsersOnline:', data);
    if (data.users_online && Array.isArray(data.users_online)){
        A.users_online = data.users_online;
    }
    A.listReceived = true;
    console.log('users_online:', A.users_online, 'listReceived:', A.listReceived);
}

A.login = async function(e){
    console.log('e.target:', e.target);
    console.log('e:', e);
    e.preventDefault();
    console.log('event.defaultPrevented', e.defaultPrevented);
    document.querySelector('div[class="error"]').innerHTML='';
    const username = document.querySelector('input[name="nicname"]').value;
    A.options.username = null;
    A.options.room = document.querySelector('input[name="room"]').value;
    ROOM = A.options.room;
    A.socket.init(A);
    A.socket.setEventHandler('users_online', A.fillUsersOnline.bind(A))
    console.log('A.listReceived:', A.listReceived)
    while (!A.listReceived){ await sleep(1000); console.log('sleep ');};
    console.log('A.users_online:', A.users_online, A.options.username)
    if (A.users_online.indexOf(username) === -1){
        e.target.submit();
    } else {
        document.querySelector('div[class="error"]').innerHTML='This NicName already busy! Choose another';
    }
    A.listReceived = false
}

