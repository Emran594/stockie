
<div class="modal fade" id="showModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="modal-close"></button>
            </div>
            <form id="save-form" class="tablelist-form" autocomplete="off">
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="productname-field" class="form-label">Product Name</label>
                        <input type="text" id="productName" class="form-control" placeholder="Enter name" required />
                        <div class="invalid-feedback">Please enter a product name.</div>
                    </div>
                    <div class="mb-3">
                        <label for="productname-field" class="form-label">Product Category</label>
                        <select name="category" class="form-control" id="">
                            <option value="">Electronics</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="productname-field" class="form-label">Buy Price</label>
                        <input type="text" id="productMobile" class="form-control" placeholder="Enter mobile" required />
                        <div class="invalid-feedback">Please enter a product mobile.</div>
                    </div>
                    <div class="mb-3">
                        <label for="productname-field" class="form-label">Unit</label>
                        <input type="text" id="productMobile" class="form-control" placeholder="Enter mobile" required />
                    </div>
                    <div class="mb-3">
                        <div class="position-absolute  bottom-0 ">
                            <label for="customer-image-input" class="mb-0" data-bs-toggle="tooltip" data-bs-placement="right" title="Select Image">Select Image<i class="ri-image-fill"></i></label>

                            <input class="form-control d-none" value="" name="img_url" id="customer-image-input" type="file" accept="image/png, image/gif, image/jpeg" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success" id="save-btn">Add Product</button>
                        <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
