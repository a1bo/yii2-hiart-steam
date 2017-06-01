<?php

namespace a1bor\steam;

use hiqdev\hiart\Query;


class QueryBuilder extends \hiqdev\hiart\rest\QueryBuilder
{
    public function buildUri(Query $query)
    {
        $from = $query->from . 's';

        $prefix = $this->buildPrefix($query);

        return ($prefix ? $prefix . '/' : '') . $from;
    }

    public function buildPrefix(Query $query)
    {
        if ($query->from === 'repo') {
            if (!empty($query->where['organization'])) {
                $organization = $query->where['organization'];
                unset($query->where['organization']);

                return "orgs/$organization";
            } elseif (!empty($query->where['user'])) {
                $user = $query->where['user'];
                unset($query->where['user']);

                return "users/$user";
            }
        }
    }
}
