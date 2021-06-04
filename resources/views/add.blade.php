<x-header />
<div>
<h1>
    Add Form
<h1>

<form>
    @csrf
    <div>
        <label>Name : </label>
        <input type="text" name="name" id="name">
    <div>
    <div>
        <label>Email : </label>
        <input type="email" name="email" id="email">
    <div>
    <div>
        <label>Phone : </label>
        <input type="text" name="phone" id="phone">
    <div>
    <div>
        <label>Address : </label>
        <textarea  name="address" id="address">
    </div>
    <button type="submit">Submit</button>
</form>

</div>