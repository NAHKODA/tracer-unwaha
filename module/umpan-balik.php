<?php
/*
session_start();
if(!empty($_SESSION['nama']) AND !empty($_SESSION['nim'])){
*/
?>
	<header class="sb-page-header" style="padding-top: 60px;padding-bottom: 30px;text-align: left;font-size: 24px;padding: 30px 15px;color: rgba(255,255,255,.8);background-color: #26A65B;margin-bottom: 40px;font-size: 15px;background-image: url(images/bg.png);position: relative;">
	<div class="container" style="margin-top: 75px; margin-left:0px">
	    <div class="row">
	      <div class="col-md-4">
	        <ol class="breadcrumb" style="margin-left:90px">
	          <li><a href="/">Home</a></li>
	          <li class="active">Halaman 3</li>
	        </ol>
	      </div>
	    </div>
	  </div>  
	</header>	
	<div class="container">		
		<div class="col-md-12">			
	    <div class="panel panel-success" style="box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);">
	      <div class="panel-heading" style="background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNjciIGhlaWdodD0iMTkzIj48cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSJyZ2IoNjQsIDE5NiwgMTA5KSIgIC8+PHJlY3QgeD0iLTE3LjY2NjY2NjY2NjY2NjY2NCIgeT0iLTE3LjY2NjY2NjY2NjY2NjY2NCIgd2lkdGg9IjM1LjMzMzMzMzMzMzMzMzMzIiBoZWlnaHQ9IjM1LjMzMzMzMzMzMzMzMzMzIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsPSIjMjIyIiBmaWxsLW9wYWNpdHk9IjAuMTMyNjY2NjY2NjY2NjY2NjUiIHN0cm9rZS13aWR0aD0iMSIgIC8+PHJlY3QgeD0iMTQ5LjUzMjQ2MTg2NzQzMzY1IiB5PSItMTcuNjY2NjY2NjY2NjY2NjY0IiB3aWR0aD0iMzUuMzMzMzMzMzMzMzMzMzMiIGhlaWdodD0iMzUuMzMzMzMzMzMzMzMzMzMiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGw9IiMyMjIiIGZpbGwtb3BhY2l0eT0iMC4xMzI2NjY2NjY2NjY2NjY2NSIgc3Ryb2tlLXdpZHRoPSIxIiAgLz48cmVjdCB4PSItMTcuNjY2NjY2NjY2NjY2NjY0IiB5PSIxNzUuMzk4MjU3MDY4MjAwNjUiIHdpZHRoPSIzNS4zMzMzMzMzMzMzMzMzMyIgaGVpZ2h0PSIzNS4zMzMzMzMzMzMzMzMzMyIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjEzMjY2NjY2NjY2NjY2NjY1IiBzdHJva2Utd2lkdGg9IjEiICAvPjxyZWN0IHg9IjE0OS41MzI0NjE4Njc0MzM2NSIgeT0iMTc1LjM5ODI1NzA2ODIwMDY1IiB3aWR0aD0iMzUuMzMzMzMzMzMzMzMzMzMiIGhlaWdodD0iMzUuMzMzMzMzMzMzMzMzMzMiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGw9IiMyMjIiIGZpbGwtb3BhY2l0eT0iMC4xMzI2NjY2NjY2NjY2NjY2NSIgc3Ryb2tlLXdpZHRoPSIxIiAgLz48cmVjdCB4PSI2NS45MzI4OTc2MDAzODM0OCIgeT0iMzAuNTk5NTY0MjY3MDUwMTYiIHdpZHRoPSIzNS4zMzMzMzMzMzMzMzMzMyIgaGVpZ2h0PSIzNS4zMzMzMzMzMzMzMzMzMyIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbD0iI2RkZCIgZmlsbC1vcGFjaXR5PSIwLjEwNjY2NjY2NjY2NjY2NjY3IiBzdHJva2Utd2lkdGg9IjEiICAvPjxyZWN0IHg9Ii0xNy42NjY2NjY2NjY2NjY2NjQiIHk9Ijc4Ljg2NTc5NTIwMDc2NyIgd2lkdGg9IjM1LjMzMzMzMzMzMzMzMzMzIiBoZWlnaHQ9IjM1LjMzMzMzMzMzMzMzMzMzIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsPSIjZGRkIiBmaWxsLW9wYWNpdHk9IjAuMDg5MzMzMzMzMzMzMzMzMzMiIHN0cm9rZS13aWR0aD0iMSIgIC8+PHJlY3QgeD0iMTQ5LjUzMjQ2MTg2NzQzMzY1IiB5PSI3OC44NjU3OTUyMDA3NjciIHdpZHRoPSIzNS4zMzMzMzMzMzMzMzMzMyIgaGVpZ2h0PSIzNS4zMzMzMzMzMzMzMzMzMyIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbD0iI2RkZCIgZmlsbC1vcGFjaXR5PSIwLjA4OTMzMzMzMzMzMzMzMzMzIiBzdHJva2Utd2lkdGg9IjEiICAvPjxyZWN0IHg9IjY1LjkzMjg5NzYwMDM4MzQ4IiB5PSIxMjcuMTMyMDI2MTM0NDgzODEiIHdpZHRoPSIzNS4zMzMzMzMzMzMzMzMzMyIgaGVpZ2h0PSIzNS4zMzMzMzMzMzMzMzMzMyIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjAyODY2NjY2NjY2NjY2NjY2NyIgc3Ryb2tlLXdpZHRoPSIxIiAgLz48cG9seWxpbmUgcG9pbnRzPSIwLCAwLCAzMC41OTk1NjQyNjcwNTAxNiwgMTcuNjY2NjY2NjY2NjY2NjY0LCAwLCAzNS4zMzMzMzMzMzMzMzMzMywgMCwgMCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjExNTMzMzMzMzMzMzMzMzM0IiBzdHJva2Utd2lkdGg9IjEiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDE3LjY2NjY2NjY2NjY2NjY2NCwgLTE3LjY2NjY2NjY2NjY2NjY2NCkgcm90YXRlKDAsIDE3LjY2NjY2NjY2NjY2NjY2NCwgMTUuMjk5NzgyMTMzNTI1MDgpIiAgLz48cG9seWxpbmUgcG9pbnRzPSIwLCAwLCAzMC41OTk1NjQyNjcwNTAxNiwgMTcuNjY2NjY2NjY2NjY2NjY0LCAwLCAzNS4zMzMzMzMzMzMzMzMzMywgMCwgMCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjExNTMzMzMzMzMzMzMzMzM0IiBzdHJva2Utd2lkdGg9IjEiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDE3LjY2NjY2NjY2NjY2NjY2NCwgMjEwLjczMTU5MDQwMTUzMzk2KSByb3RhdGUoMCwgMTcuNjY2NjY2NjY2NjY2NjY0LCAxNS4yOTk3ODIxMzM1MjUwOCkgc2NhbGUoMSwgLTEpIiAgLz48cG9seWxpbmUgcG9pbnRzPSIwLCAwLCAzMC41OTk1NjQyNjcwNTAxNiwgMTcuNjY2NjY2NjY2NjY2NjY0LCAwLCAzNS4zMzMzMzMzMzMzMzMzMywgMCwgMCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjAyODY2NjY2NjY2NjY2NjY2NyIgc3Ryb2tlLXdpZHRoPSIxIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxNDkuNTMyNDYxODY3NDMzNjUsIC0xNy42NjY2NjY2NjY2NjY2NjQpIHJvdGF0ZSgwLCAxNy42NjY2NjY2NjY2NjY2NjQsIDE1LjI5OTc4MjEzMzUyNTA4KSBzY2FsZSgtMSwgMSkiICAvPjxwb2x5bGluZSBwb2ludHM9IjAsIDAsIDMwLjU5OTU2NDI2NzA1MDE2LCAxNy42NjY2NjY2NjY2NjY2NjQsIDAsIDM1LjMzMzMzMzMzMzMzMzMzLCAwLCAwIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsPSIjMjIyIiBmaWxsLW9wYWNpdHk9IjAuMDI4NjY2NjY2NjY2NjY2NjY3IiBzdHJva2Utd2lkdGg9IjEiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDE0OS41MzI0NjE4Njc0MzM2NSwgMjEwLjczMTU5MDQwMTUzMzk2KSByb3RhdGUoMCwgMTcuNjY2NjY2NjY2NjY2NjY0LCAxNS4yOTk3ODIxMzM1MjUwOCkgc2NhbGUoLTEsIC0xKSIgIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwgMCwgMzAuNTk5NTY0MjY3MDUwMTYsIDE3LjY2NjY2NjY2NjY2NjY2NCwgMCwgMzUuMzMzMzMzMzMzMzMzMzMsIDAsIDAiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGw9IiNkZGQiIGZpbGwtb3BhY2l0eT0iMC4xNDEzMzMzMzMzMzMzMzMzNCIgc3Ryb2tlLXdpZHRoPSIxIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxMDEuMjY2MjMwOTMzNzE2ODMsIDMwLjU5OTU2NDI2NzA1MDE2KSIgIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwgMCwgMzAuNTk5NTY0MjY3MDUwMTYsIDE3LjY2NjY2NjY2NjY2NjY2NCwgMCwgMzUuMzMzMzMzMzMzMzMzMzMsIDAsIDAiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGw9IiMyMjIiIGZpbGwtb3BhY2l0eT0iMC4wOTgiIHN0cm9rZS13aWR0aD0iMSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNjUuOTMyODk3NjAwMzgzNDgsIDMwLjU5OTU2NDI2NzA1MDE2KSBzY2FsZSgtMSwgMSkiICAvPjxwb2x5bGluZSBwb2ludHM9IjAsIDAsIDMwLjU5OTU2NDI2NzA1MDE2LCAxNy42NjY2NjY2NjY2NjY2NjQsIDAsIDM1LjMzMzMzMzMzMzMzMzMzLCAwLCAwIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsPSIjZGRkIiBmaWxsLW9wYWNpdHk9IjAuMDcyMDAwMDAwMDAwMDAwMDEiIHN0cm9rZS13aWR0aD0iMSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTAxLjI2NjIzMDkzMzcxNjgzLCAxNjIuNDY1MzU5NDY3ODE3MTQpIHNjYWxlKDEsIC0xKSIgIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwgMCwgMzAuNTk5NTY0MjY3MDUwMTYsIDE3LjY2NjY2NjY2NjY2NjY2NCwgMCwgMzUuMzMzMzMzMzMzMzMzMzMsIDAsIDAiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGw9IiMyMjIiIGZpbGwtb3BhY2l0eT0iMC4wNjMzMzMzMzMzMzMzMzMzNCIgc3Ryb2tlLXdpZHRoPSIxIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg2NS45MzI4OTc2MDAzODM0OCwgMTYyLjQ2NTM1OTQ2NzgxNzE0KSBzY2FsZSgtMSwgLTEpIiAgLz48cG9seWxpbmUgcG9pbnRzPSIwLCAwLCAzMC41OTk1NjQyNjcwNTAxNiwgMTcuNjY2NjY2NjY2NjY2NjY0LCAwLCAzNS4zMzMzMzMzMzMzMzMzMywgMCwgMCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbD0iI2RkZCIgZmlsbC1vcGFjaXR5PSIwLjAzNzMzMzMzMzMzMzMzMzMzIiBzdHJva2Utd2lkdGg9IjEiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDE3LjY2NjY2NjY2NjY2NjY2NCwgNzguODY1Nzk1MjAwNzY3KSIgIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwgMCwgMzAuNTk5NTY0MjY3MDUwMTYsIDE3LjY2NjY2NjY2NjY2NjY2NCwgMCwgMzUuMzMzMzMzMzMzMzMzMzMsIDAsIDAiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGw9IiMyMjIiIGZpbGwtb3BhY2l0eT0iMC4wOTgiIHN0cm9rZS13aWR0aD0iMSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTQ5LjUzMjQ2MTg2NzQzMzY1LCA3OC44NjU3OTUyMDA3NjcpIHNjYWxlKC0xLCAxKSIgIC8+PHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjM1LjMzMzMzMzMzMzMzMzMzIiBoZWlnaHQ9IjM1LjMzMzMzMzMzMzMzMzMzIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsPSIjZGRkIiBmaWxsLW9wYWNpdHk9IjAuMDcyMDAwMDAwMDAwMDAwMDEiIHN0cm9rZS13aWR0aD0iMSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTcuNjY2NjY2NjY2NjY2NjY0LCAxNy42NjY2NjY2NjY2NjY2NjQpIHJvdGF0ZSgtMzAsIDAsIDApIiAgLz48cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMzUuMzMzMzMzMzMzMzMzMzMiIGhlaWdodD0iMzUuMzMzMzMzMzMzMzMzMzMiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGw9IiNkZGQiIGZpbGwtb3BhY2l0eT0iMC4wNzIwMDAwMDAwMDAwMDAwMSIgc3Ryb2tlLXdpZHRoPSIxIiB0cmFuc2Zvcm09InNjYWxlKC0xLCAxKSB0cmFuc2xhdGUoLTE0OS41MzI0NjE4Njc0MzM2NSwgMTcuNjY2NjY2NjY2NjY2NjY0KSByb3RhdGUoLTMwLCAwLCAwKSIgIC8+PHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjM1LjMzMzMzMzMzMzMzMzMzIiBoZWlnaHQ9IjM1LjMzMzMzMzMzMzMzMzMzIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsPSIjMjIyIiBmaWxsLW9wYWNpdHk9IjAuMDk4IiBzdHJva2Utd2lkdGg9IjEiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDE3LjY2NjY2NjY2NjY2NjY2NCwgNDMuNTMyNDYxODY3NDMzNjcpIHJvdGF0ZSgzMCwgMCwgMzUuMzMzMzMzMzMzMzMzMzMpIiAgLz48cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMzUuMzMzMzMzMzMzMzMzMzMiIGhlaWdodD0iMzUuMzMzMzMzMzMzMzMzMzMiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGw9IiNkZGQiIGZpbGwtb3BhY2l0eT0iMC4xMjQwMDAwMDAwMDAwMDAwMSIgc3Ryb2tlLXdpZHRoPSIxIiB0cmFuc2Zvcm09InNjYWxlKC0xLCAxKSB0cmFuc2xhdGUoLTE0OS41MzI0NjE4Njc0MzM2NSwgNDMuNTMyNDYxODY3NDMzNjcpIHJvdGF0ZSgzMCwgMCwgMzUuMzMzMzMzMzMzMzMzMzMpIiAgLz48cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMzUuMzMzMzMzMzMzMzMzMzMiIGhlaWdodD0iMzUuMzMzMzMzMzMzMzMzMzMiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGw9IiNkZGQiIGZpbGwtb3BhY2l0eT0iMC4wODkzMzMzMzMzMzMzMzMzMyIgc3Ryb2tlLXdpZHRoPSIxIiB0cmFuc2Zvcm09InNjYWxlKDEsIC0xKSB0cmFuc2xhdGUoMTcuNjY2NjY2NjY2NjY2NjY0LCAtMTQ5LjUzMjQ2MTg2NzQzMzY1KSByb3RhdGUoMzAsIDAsIDM1LjMzMzMzMzMzMzMzMzMzKSIgIC8+PHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjM1LjMzMzMzMzMzMzMzMzMzIiBoZWlnaHQ9IjM1LjMzMzMzMzMzMzMzMzMzIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsPSIjZGRkIiBmaWxsLW9wYWNpdHk9IjAuMDIiIHN0cm9rZS13aWR0aD0iMSIgdHJhbnNmb3JtPSJzY2FsZSgtMSwgLTEpIHRyYW5zbGF0ZSgtMTQ5LjUzMjQ2MTg2NzQzMzY1LCAtMTQ5LjUzMjQ2MTg2NzQzMzY1KSByb3RhdGUoMzAsIDAsIDM1LjMzMzMzMzMzMzMzMzMzKSIgIC8+PHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjM1LjMzMzMzMzMzMzMzMzMzIiBoZWlnaHQ9IjM1LjMzMzMzMzMzMzMzMzMzIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsPSIjMjIyIiBmaWxsLW9wYWNpdHk9IjAuMDQ2IiBzdHJva2Utd2lkdGg9IjEiIHRyYW5zZm9ybT0ic2NhbGUoMSwgLTEpIHRyYW5zbGF0ZSgxNy42NjY2NjY2NjY2NjY2NjQsIC0xNzUuMzk4MjU3MDY4MjAwNjUpIHJvdGF0ZSgtMzAsIDAsIDApIiAgLz48cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMzUuMzMzMzMzMzMzMzMzMzMiIGhlaWdodD0iMzUuMzMzMzMzMzMzMzMzMzMiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGw9IiMyMjIiIGZpbGwtb3BhY2l0eT0iMC4xMTUzMzMzMzMzMzMzMzMzNCIgc3Ryb2tlLXdpZHRoPSIxIiB0cmFuc2Zvcm09InNjYWxlKC0xLCAtMSkgdHJhbnNsYXRlKC0xNDkuNTMyNDYxODY3NDMzNjUsIC0xNzUuMzk4MjU3MDY4MjAwNjUpIHJvdGF0ZSgtMzAsIDAsIDApIiAgLz48L3N2Zz4='); position: relative; background-color: rgb(38, 166, 91); color: rgb(255, 255, 255);position:relative;background-color:rgb(92,184,92);color:=rgb(255,255,255);">Halaman <b>3</b> dari 3 halaman</div>
	      <div class="panel-body">
	      	<div class="umpan-balik">
			<form action ="simpan-step-1.php" method="POST" role="form">
			  <div class="form-group">
			    <label for="jenisusaha">
			    	<span style="border-left: 3px solid #66AE53;"> &nbsp; Kesulitan apa yang saudara dihadapi saat pertama kali bekerja?<span style="color:red">*</span></span>
			    </label>
			    <input type="text" name="kesulitan" class="form-control" id="jenisusaha" placeholder="Masukan Kesulitan Saat Pertama Kali Bekerja" autocomplete="off">
			  </div>		  

			  <div class="form-group">
			    <label for="bidangusaha">
			    	<span style="border-left: 3px solid #66AE53;"> &nbsp; Menurut pendapat saudara, kemampuan lulusan Jurusan Sistem Informasi STMIK Bahrul ’Ulum Jombang  yang dirasa belum memadai saat pertama kali bekerja adalah</span>
			    </label>
				<div class="checkbox">
				  <label><input type="checkbox" name="kemampuankeahlian" value="Kemampuan keahlian">Kemampuan keahlian</label>
				  <label><input type="checkbox" name="kemampuanterapan" value="Kemampuan terapan/lapangan">Kemampuan terapan/lapangan</label>
				  <label><input type="checkbox" name="kemampuankomunikasi" value="Kemampuan komunikasi">Kemampuan komunikasi</label>
				  <p style="margin-top: inherit">				  
			    	<span> &nbsp; Sikap/perilaku, mohon disebutkan misalnya...</span>
				  <textarea name="sikapperilaku" class="form-control" rows="2" id="jumlahkaryawan" placeholder="" autocomplete="off"></textarea>
				  <p>				  
			    	<span> &nbsp; Lainnya, sebutkan...</span>		  
				  <textarea name="kemampuanlainnya" class="form-control" rows="2" id="jumlahkaryawan" placeholder="" autocomplete="off"></textarea>
				</div>
			  </div>

			  <div class="form-group">
			    <label for="mendirikanusaha">
			    	<span style="border-left: 3px solid #66AE53;"> &nbsp; Menurut  anda bagaimana relevansi kurikulum Prodi Sistem Informasi  dengan dunia kerja ?<span style="color:red">*</span></span>
			    </label>
			    <textarea name="relevansi" class="form-control" rows="3" id="jumlahkaryawan" placeholder="" autocomplete="off"></textarea>
			  </div>

			  <div class="form-group">
			    <label for="jumlahkaryawan">
			    	<span style="border-left: 3px solid #66AE53;"> &nbsp; Saran perbaikan untuk  Prodi Sistem Informasi adalah<span style="color:red">*</span></span>
			    </label>
			    <textarea name="saranperbaikan" class="form-control" rows="6" id="jumlahkaryawan" placeholder="Masukan Saran Anda untuk Prodi Sistem Informasi" autocomplete="off"></textarea>
			  </div>			  			  

			  <button type="submit" class="btn btn-default" style="float:right">Finish <i class="fa fa-long-arrow-right"></i></button>
			</form>	
			Note : <span style="color:red">*</span>) Wajib Diisi 			
			</div>
	      </div>
	    </div>						
		</div>
	</div>
<?php
/*
}else{
       
       header("location:home");
}
*/
?>	