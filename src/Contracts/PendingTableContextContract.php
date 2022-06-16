<?php

namespace Altra\Context\Contracts;

use Altra\Context\PendingTableContext;
use Illuminate\Database\Eloquent\Builder;

/**
 * This file is part of Altra,
 * Library that makes it possible to filter by context for HTTP request responses.
 *
 * @license MIT
 * @package Altra\Context
 */
interface PendingTableContextContract
{
  /* Set initial context */
  public function setContext(mixed $context): PendingTableContext;

  /* Set initial query */
  public function setInitialQuery(Builder $query): PendingTableContext;

  /* Set sort direction for query */
  public function sortDescending($descending): PendingTableContext;

  /* Sort By field */
  public function sortBy(string $sortBy): PendingTableContext;

  /* Set filters */
  public function withFilters($filters): PendingTableContext;

  /* Set items per page */
  public function perPage($perPage): PendingTableContext;

  /* Set current page */
  public function currentPage($currentPage): PendingTableContext;

  /* Do not paginate  */
  public function doNotPaginate(): PendingTableContext;

  /* Transform Filter as needed  */
  public function withCustomFilter($callback): PendingTableContext;

  /* Apply conditional to query */
  public function when($condition, $callback, $else): PendingTableContext;

  /* Return result with resource structure chosen */
  public function withResource($resource): PendingTableContext;

  /* Add relations to entity response */
  public function includeRelations(a$with): PendingTableContext;

  /* Execute action to return query result */
  public function get();

}
