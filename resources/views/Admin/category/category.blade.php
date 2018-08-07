<tr>
    <td>{!! $category->id !!}</td>
    <td>{!! $category->name !!}</td>
    <td>
        <div class="row">
            <div class="col-md-6">
                <button class="btn btn-success"><a href="{{ route('category.update', $category->id) }}"><i class="fa fa-edit"></i> Edit </a></button>
            </div>
            <div class="col-md-6">
                <button class="btn btn-danger"><a href="{{ route('category.delete', $category->id) }}"><i class="fa fa-trash"></i> Delete </a></button>
            </div>
        </div>
    </td>
</tr>    
    
