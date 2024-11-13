@extends('layouts.admin.admin-layout')

@section('content')
    <x-create-form title="Create New User" :columnsName="$club"></x-create-form>
    <x-edit-form title="Edit User" :columnsName="$club"></x-edit-form>
    <x-delete-modal title="Delete Confirmation" content="Are you sure you want to delete it!"></x-delete-modal>
    <x-jquery-data-table :records="$records" :columnsName="$club" title="Example Title" subTitle="Basic Example"></x-jquery-data-table>

    

    <script>
        const dataSubmit = {};
        const createFormInputs = document.querySelectorAll('input.create-form-input');
        const createFormSubmitBtn = document.querySelector('a.create-form-submit-button');

        createFormSubmitBtn.onclick = function(e) {
            createFormInputs.forEach(input => {
                const inputName = input.name;
                dataSubmit[inputName] = input.value;
            });
            apiService.post('/api/user/store', dataSubmit);
            document.querySelector('.launch-pricing-modal').click();
        }
    </script>

    <script>
        const editDataSubmit = {};
        const editFormInputs = document.querySelectorAll('input.edit-form-input');
        const editFormSubmitBtn = document.querySelector('a.edit-form-submit-button');
    
        editFormSubmitBtn.onclick = function(e) {
            editFormInputs.forEach(input => {
                const inputName = input.name;
                editDataSubmit[inputName] = input.value;
            });
            apiService.put('/api/user/update', editDataSubmit);
            document.querySelector('.edit-form-modal').click();
        }
    </script>

    <script>
        const confirmDeleteBtn = document.getElementById('confirmDeleteBtn')
        confirmDeleteBtn.onclick = function() {
            apiService.delete('/api/user/delete/' + document.getElementById('idToDelete').value);
            document.getElementById('closeDeleteModalBtn').click();
        }
        
    </script>
    
    <script>
        function changeID(id) {
            const idEditInputElm = document.getElementById('editFormInputID')
            idEditInputElm.value = id;
    
            fetch('/api/user/' + id, {
                method: 'GET',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken, // Thay csrfToken bằng giá trị thực tế
                    'Authorization': `Bearer ${JSON.parse(localStorage.getItem('access_token'))}`
                },
            })
                .then(response => response.json())
                .then(data => {
                    const editFormInputs = document.querySelectorAll('input.edit-form-input');
                    editFormInputs.forEach(input => {
                        input.value = data.user[input.name]
                    })
                })
                .catch(error => {
                    console.log(error)
                });
        }
    
        function deleteWithID(id) {
            document.getElementById('idToDelete').value = id;
        }
    </script>
@endsection