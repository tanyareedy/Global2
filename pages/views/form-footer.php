<section>
    <form class="bg-transparent  p-3 rounded" id="applyForm" action="/controllers/process.php"
          method="post">
        <div class="form-row">
            <div class="form-group col-md-12 col-lg-13">

                <label for="firstName">Name:
                </label>
                <input
                        class="form-control input-group-lg py-4 rounded"
                        type="text" name="name"
                        id="firstName"
                        placeholder="Full name"
                        required>


                <label
                        class="pt-2"
                        for="mailFrom">Email:
                </label>
                <input
                        class="form-control input-group-lg py-4 rounded"
                        type="email" name="mailFrom"
                        id="mobileNo"
                        placeholder="Email address"
                        required>
            </div>

            <div class="form-group col-md-12  col-lg-12">
                <label
                        for="mobileNo">Mobile No:
                </label>
                <input
                        class="form-control input-group-lg py-4 rounded"
                        type="number"
                        name="mobileNo"
                        id="mobileNo"
                        placeholder="Mobile Number"
                        required>


                <label class="pt-2" for="exampleFormControlSelect1"> Choose Program:</label>
                <select
                        class="form-control input-group-lg py-2 rounded"
                        name="reason"
                        id="exampleFormControlSelect1"
                        required>
                    <option value="Greece">Greece</option>
                    <option value="Egypt">Egypt</option>
                    <option value="France">France</option>
                    <option value="Germany">Germany</option>
                </select>
            </div>


            <div class="form-group col-md-12 col-lg-12">
                <label
                        for="message">Message: </label>
                <textarea
                        class="form-control rounded"
                        name="message"
                        rows="10" cols="10"
                        id="message"
                        placeholder="* Briefly describe your situation and any questions you may have."
                        style="height: 141px"
                required></textarea>
            </div>
            <div class=" pt-2">



            </div>
            <button type="submit"  name="submit" class="btn bg-primary text-white btn-lg btn-block">Send Message</button>

        </div>
    </form>
</section>


<style>


    .form-control {
        display: block;
        width: 100%;
        height: calc(1.5em + .75rem + 2px);
        padding: .375rem .75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        /* background-color: #fff; */
        background-clip: padding-box;
        border: 3px solid #10a87f;
        border-radius: .25rem;
        transition:p border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    }
</style>



