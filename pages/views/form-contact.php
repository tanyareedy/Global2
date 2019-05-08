<div id="heroContent">
    <form class="bg-white shadow p-3 rounded" id="applyForm" action="/controllers/process.php"
          method="post">
        <div class="form-row">
            <div class="form-group col-md-12">

                <label for="firstName"><strong>Name:</strong>
                </label>
                <input class="form-control" type="text" name="name" id="firstName"
                       placeholder="Full name">

                <label class="pt-2" for="mailFrom"><strong>Email:</strong>
                </label>
                <input type="email" name="mailFrom" class="form-control" id="mobileNo"
                       placeholder="Email address">

                <label class="pt-2" for="mobileNo"><strong>Mobile No:</strong>
                </label>
                <input type="number" name="mobileNo" class="form-control" id="mobileNo"
                       placeholder="Mobile Number">

                <label class="pt-2" for="exampleFormControlSelect1"><strong> Choose Program:</strong></label>
                <select
                        class="form-control input-group-lg py-2 rounded"
                        name="program"
                        id="exampleFormControlSelect1">
                    <option value="Cyprus">Cyprus</option>
                    <option value="Canada">Canada</option>
                    <option value="Greece">Greece</option>
                    <option value="Grenada">Grenada</option>
                    <option value="USA">USA</option>
                </select>
            </div>


            <label class="pt-2" for="message"> <strong>Message:</strong> </label>
            <textarea
                    name="message"
                    rows="10"
                    cols="10"
                    class="form-control"
                    id="message"
                    placeholder="* Briefly describe your situation and any questions you may have."
                    style="height: 150px"></textarea>

            <div class="mt-lg-3 pt-2">
                <button class="btn bg-primary text-white" type="submit" name="submit">Send Message
                </button>
            </div>
        </div>
    </form>

</div>



