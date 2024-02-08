<div class="modal fade" id="updateModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="modal-close"></button>
            </div>
            <form id="save-form" class="tablelist-form" autocomplete="off">
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="customername-field" class="form-label">Category Name</label>
                        <input type="text" id="categoryName" class="form-control" placeholder="Enter name" required />
                        <div class="invalid-feedback">Please enter a customer name.</div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        {{-- <button class="btn btn-success" id="save-btn">Add Category</button> --}}
                        <button onclick="update()" type="button" class="btn btn-success" id="edit-btn">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<script>


   async function FillUpUpdateForm(id){
        document.getElementById('updateID').value=id;
      //  showLoader();
        let res=await axios.post("/category-by-id",{id:id})
       // hideLoader();
        document.getElementById('categoryNameUpdate').value=res.data['name'];
    }

    async function Update() {

        let categoryName = document.getElementById('categoryNameUpdate').value;
        let updateID = document.getElementById('updateID').value;

        if (categoryName.length === 0) {
            errorToast("Category Required !")
        }
        else{
            document.getElementById('update-modal-close').click();
            showLoader();
            let res = await axios.post("/update-category",{name:categoryName,id:updateID})
            hideLoader();

            if(res.status===200 && res.data===1){
                document.getElementById("update-form").reset();
                successToast("Request success !")
                await getList();
            }
            else{
                errorToast("Request fail !")
            }


        }



    }



</script>
