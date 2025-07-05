<div>
    <div class="heading  d-flex align-items-center justify-content-center mb-5 ">
        <h3>Bird Health Report</h3>
    </div>
    <div class="row  d-flex align-items-center justify-content-center mb-5 ">
        <div class="card col-md-10 ">
            <form wire:submit.prevent="submit">
                <div class="card-head d-flex justify-content-between">
                    <div class="select">
                        <select class="form-select" aria-label="Default select example">
                            <option value="">Select Batch</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
                <div class="card-body g-1">
                    <h5 class="card-title">Description</h5>
                    <div class="form-floating">
                        <textarea class="form-control text-dark" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        <label for="floatingTextarea text-dark">Description</label>
                    </div>
                    <div class="check-button">
                        <h5>Symptoms</h5>
                        <div class="form-check">
                            <input class="form-check-input  " type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label text-dark" for="flexCheckDefault">
                                Default checkbox
                            </label>
                        </div>
                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                checked>
                            <label class="form-check-label text-dark" for="flexCheckChecked">
                                Checked checkbox
                            </label>
                        </div>
                    </div>
                    <button type="submit" style="position: static !important" class="btn btn-highlight">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
