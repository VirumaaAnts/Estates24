(function () {
    if (typeof window.CustomEvent === "function") return false;
    function CustomEvent(event, params) {
        params = params || { bubbles: false, cancelable: false, detail: null };
        var evt = document.createEvent('CustomEvent');
        evt.initCustomEvent(event, params.bubbles, params.cancelable, params.detail);
        return evt;
    }
    window.CustomEvent = CustomEvent;
})();

$modal_window = function (options) {
    var
        _elemModal,
        _eventShowModal,
        _eventHideModal,
        _hiding = false,
        _destroyed = false,
        _animationSpeed = 200;

    function _createModal(options) {
        var
            elemModal = document.createElement('div'),
            modalTemplate = '<div class="modal__backdrop" data-dismiss="modal_window"><div class="modal__content"><div class="modal__header"><div class="modal__title" data-modal_window="title">{{title}}</div><span class="modal__btn-close" data-dismiss="modal_window" title="Закрыть">×</span></div><div class="modal__body" data-modal_window="content">{{content}}</div>{{footer}}</div></div>',
            modalFooterTemplate = '<div class="modal__footer">{{buttons}}</div>',
            modalButtonTemplate = '<button type="button" class="{{button_class}}" data-handler={{button_handler}}>{{button_text}}</button>',
            modalHTML,
            modalFooterHTML = '';

        elemModal.classList.add('modal_window');
        modalHTML = modalTemplate.replace('{{title}}', options.title || 'Новое окно');
        modalHTML = modalHTML.replace('{{content}}', options.content || '');
        if (options.footerButtons) {
            for (var i = 0, length = options.footerButtons.length; i < length; i++) {
                var modalFooterButton = modalButtonTemplate.replace('{{button_class}}', options.footerButtons[i].class);
                modalFooterButton = modalFooterButton.replace('{{button_handler}}', options.footerButtons[i].handler);
                modalFooterButton = modalFooterButton.replace('{{button_text}}', options.footerButtons[i].text);
                modalFooterHTML += modalFooterButton;
            }
            modalFooterHTML = modalFooterTemplate.replace('{{buttons}}', modalFooterHTML);
        }
        modalHTML = modalHTML.replace('{{footer}}', modalFooterHTML);
        elemModal.innerHTML = modalHTML;
        document.body.appendChild(elemModal);
        return elemModal;
    }

    function _showModal() {
        if (!_destroyed && !_hiding) {
            _elemModal.classList.add('modal__show');
            document.dispatchEvent(_eventShowModal);
        }
    }

    function _hideModal() {
        _hiding = true;
        _elemModal.classList.remove('modal__show');
        _elemModal.classList.add('modal__hiding');
        setTimeout(function () {
            _elemModal.classList.remove('modal__hiding');
            _hiding = false;
        }, _animationSpeed);
        document.dispatchEvent(_eventHideModal);
    }

    function _handlerCloseModal(e) {
        if (e.target.dataset.dismiss === 'modal_window') {
            _hideModal();
        }
    }

    _elemModal = _createModal(options || {});


    _elemModal.addEventListener('click', _handlerCloseModal);
    _eventShowModal = new CustomEvent('show.modal_window', { detail: _elemModal });
    _eventHideModal = new CustomEvent('hide.modal_window', { detail: _elemModal });

    return {
        show: _showModal,
        hide: _hideModal,
        destroy: function () {
            _elemModal.parentElement.removeChild(_elemModal),
                _elemModal.removeEventListener('click', _handlerCloseModal),
                _destroyed = true;
        },
        setContent: function (html) {
            _elemModal.querySelector('[data-modal_window="content"]').innerHTML = html;
        },
        setTitle: function (text) {
            _elemModal.querySelector('[data-modal_window="title"]').innerHTML = text;
        }
    }
};

var login = $modal_window({
    title: 'Вход',
    content: `
        <div class='login modal_window'>
            <form action="loginRes" method='POST'>
                <label for="login">email</label>
                <input type="text" name="login" id="login" placeholder="Login" autofocus required>
                <label for="log_password">password</label>
                <input type="password" name='log_password' id='log_password' placeholder="password" required>
                <button class="btn btn-primary" type="submit" name = 'send'>Login</button>
            </form>
            <div class="registrationContainer"><a class="registration" href="registration">Регистрация</a></div>
        </div>`
});

document.querySelector(".login").addEventListener("click", function (e) {
    login.show();
})