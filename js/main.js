window.onload = () => {
    if (document.querySelector('#login')) {
        document.querySelector('#btn-user-login').onclick = () => {
            document.querySelector('#agencyLogin').classList.add('display-none');
            document.querySelector('#agencyLogin').classList.remove('display-block');
            document.querySelector('#userLogin').classList.remove('display-none');
            document.querySelector('#userLogin').classList.add('display-block');
            return;
        }

        document.querySelector('#btn-agency-login').onclick = () => {
            document.querySelector('#agencyLogin').classList.remove('display-none');
            document.querySelector('#agencyLogin').classList.add('display-block');
            document.querySelector('#userLogin').classList.add('display-none');
            document.querySelector('#userLogin').classList.remove('display-block');
            return;
        }
    }

    if (document.querySelector('#register')) {
        document.querySelector('#btn-user-register').onclick = () => {
            document.querySelector('#agencyRegister').classList.add('display-none');
            document.querySelector('#agencyRegister').classList.remove('display-block');
            document.querySelector('#userRegister').classList.remove('display-none');
            document.querySelector('#userRegister').classList.add('display-block');
            return;
        }

        document.querySelector('#btn-agency-register').onclick = () => {
            document.querySelector('#agencyRegister').classList.remove('display-none');
            document.querySelector('#agencyRegister').classList.add('display-block');
            document.querySelector('#userRegister').classList.add('display-none');
            document.querySelector('#userRegister').classList.remove('display-block');
            return;
        }
    }
}