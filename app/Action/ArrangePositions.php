<?php

namespace App\Action;
use Illuminate\Support\Facades\DB;

class ArrangePositions
{
    public static function run(int $id)
    {
        DB::update('
                        with RankedProposals as (
                            select id, row_number() over(order by hours asc) as p
                            from proposals
                            where project_id = :project1
                        )
                        update proposals
                        set position = (select p from RankedProposals where proposals.id = RankedProposals.id)
                        where project_id = :project2
                    ', ['project1' => $id, 'project2' => $id]);
    }

}