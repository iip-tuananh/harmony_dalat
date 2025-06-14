@extends('layouts.main')

@section('title')
Thêm mới danh mục dịch vụ
@endsection

@section('page_title')
Thêm mới danh mục dịch vụ
@endsection

@section('title')
Thêm mới danh mục
@endsection
@section('content')
<div ng-controller="CreateCategory" ng-cloak>
  @include('admin.service_categories.form')
</div>
@endsection

@section('script')
@include('admin.service_categories.PostCategory')
<script>
  app.controller('CreateCategory', function ($scope, $http) {
    $scope.form = new PostCategory({}, {scope: $scope});
    $scope.loading = {};
    $scope.submit = function() {
      $scope.loading.submit = true;
      $.ajax({
        type: 'POST',
        url: "{!! route('ServiceCategory.store') !!}",
        headers: {
          'X-CSRF-TOKEN': CSRF_TOKEN
        },
        data: $scope.form.submit_data,
        processData: false,
        contentType: false,
        success: function(response) {
          if (response.success) {
            toastr.success(response.message);
            window.location.href = "{{ route('ServiceCategory.index') }}";
          } else {
            toastr.warning(response.message);
            $scope.errors = response.errors;
          }
        },
        error: function(e) {
          toastr.error('Đã có lỗi xảy ra');
        },
        complete: function() {
          $scope.loading.submit = false;
          $scope.$applyAsync();
        }
      });
    }

      $(document).on('click', '.remove-category', function (e) {
          e.preventDefault();
          $scope.form.parent_id = null;
      })
  });
</script>
@endsection
